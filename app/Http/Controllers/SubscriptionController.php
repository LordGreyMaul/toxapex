<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    static function createSubscription(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();
        $token = $input['stripeToken'];

        try
        {
            $user->newSubscription
            ($input['plan'], $input['plan'])->create($token, [
                'email' => $user->email
            ]);

            /*
             Address::create([
                'user_id' => Auth::id(),
                'address_line_one' => $input['addr1'],
                'address_line_two' => $input['addr2'],
                'address_line_three'=> $input['addr3'],
                'town'=> $input['town'],
                'country'=> 'United Kingdom',
                'country_code'=> 'GBR',
                'postcode'=> $input['postCode'],
            ]);
            */
            return back()->with('success', 'Subscription is completed.');
        } catch (\Exception $e)
        {
            return back()->with('success', $e->getMessage());
        }
    }

    public function cancelSubscription()
    {

    }

    public function listSubscriptions(Request $request)
    {

        $user = Auth::user();
        $subscription = $user->subscriptions()->getResults();
        foreach ($subscription as $s)
        {
            if ($s->active())
            {
                $return[] = $s->name;
            }
        }
        return view('subList', ['subs' => $return]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sub');
    }

    static function addressPost(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();
        Address::create([
            'user_id' => Auth::id(),
            'address_line_one' => $input['addr1'],
            'address_line_two' => $input['addr2'],
            'address_line_three'=> $input['addr3'],
            'town'=> $input['town'],
            'country'=> 'United Kingdom',
            'country_code'=> 'GBR',
            'postcode'=> $input['postCode'],
        ]);
        return back()->with('success', 'Address Added.');
        try
        {

        } catch (\Exception $e)
        {
            return back()->with('success', $e->getMessage());
        }
    }

}