<?php

namespace App\Http\Controllers;

use App\Category;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(isset($_REQUEST['email'])){
                    $html='<p>Hi       ,</p>

 <p>I am sending you a link to this wonderful dance school online platform that I have been attending and I must say that I still can’t believe how great this is!! During the pandemic with all the dance schools closed I tried some Zoom dance classes but was frustrated with the bad sounds, delays and buffering.  As for YouTube videos, they are not mirrored and are often interrupted by commercials and left me desperate to find a way to dance during lockdown.</p>
 <p>I found this new platform, DANSCOOL, that’s like a dance & fitness school online to take dance classes, sweat and have fun!  For just $3.50 a month, I get access to hundreds of high-quality videos of Hip-Hop, Street Jazz, Salsa, African Dance, Samba, Belly Dance, yoga, Pilates, and fitness workouts and much more. Each teacher offers an 8 video progression program, going from beginners to advanced, where I can actually learn to dance because each video of the program is a continuation and progression from the previous video.</p>
  <p>Their website is www.danscool.com but to see for yourself, try their FREEclasses on their YouTube channel:</p>
<p>https://www.youtube.com/channel/UC4ubcK5iBmyOLrGWa83eq1g/featured</p>
<p>When you join we can dance and share the experience together! </p>

<p><br>Cheers!</p>';

        $headers = "From: " . strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "Reply-To: ". strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        mail($_REQUEST['email'],"Invitation From ".Auth::user()->name." ".Auth::user()->surname,$html,$headers); 

         echo json_encode(['success']);
         die;
        }
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $userDetails = UserDetail::where('user_id',Auth::id())->get();
        return view('htmlblade/Profile',compact('userDetails','categoryMenu'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $userDetails = UserDetail::where('user_id',Auth::id())->get();
        $userDetails=$userDetails[0];
        return view('htmlblade/profile-edit',compact('userDetails','categoryMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request,
            [
                "phone" => "required|numeric",
                "m_phone" => "required|numeric",
                "address" => "required",
                "city" => "required",
                "country" => "required",
                "zipcode" => "required|numeric",

            ]);
        $input = $request->only('phone','m_phone','address','city','country','zipcode');
        $userDetail = UserDetail::where('user_id',Auth::id());
        $userDetail->update($input);

        Session::flash("status", 1);
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
