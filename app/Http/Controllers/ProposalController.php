<?php

namespace App\Http\Controllers;

use App\Models\BloodDonor;
use App\Models\Conversation;
use App\Models\CoverLetter;
use App\Models\Message;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function store(Request $request,BloodDonor $donate)
    {
        $proposal = Proposal::create([
            'blood_donor_id' => $donate->id,
            'validated' => false,
        ]);

        CoverLetter::create([
            'proposal_id' => $proposal->id,
            'content' => $request->input('content'),
        ]);

        return redirect()->route('user.donate.index');
    }
    public function confirm(Request $request)
    {
       $proposal = Proposal::findOrFail($request->proposal);
       $proposal->fill(['validated' => 1]);

       if($proposal->isDirty())
       {
            $proposal->save();
            $conversation = Conversation::create([
                'from' => auth()->user()->id,
                'to' => $proposal->user->id,
                'blood_donor_id' => $proposal->blood_donor_id,
            ]);
            Message::create([
                'user_id' => auth()->user()->id,
                'conversation_id' => $conversation->id,
                'content' => "Bonjour, demande de snag validé",
            ]);

            return redirect()->route('user.donate.donors');
       }
    }
    public function modify(Request $request){

        $donate = BloodDonor::findOrFail($request->donate);
        $donate->status = $request->status;

        $donate->save();
        return back();
    }
}
