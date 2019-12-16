@extends('layouts.master')

@section('content')

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<nav class="navigation">
  <ul class="inner-navigation">
    <li class="left">
      <a href="#" class="menu-link menu-anchor">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="right">
      <!--span class="notification-label"></span-->
      <div class="dropdown-container">
        <a href="#" data-dropdown="notificationMenu" class="menu-link has-notifications circle">
          <i class="fa fa-bell"></i>
        </a>
        <ul class="dropdown" name="notificationMenu">
          <li class="notification-group">
            <div class="notification-tab">
              <i class="fa fa-flag"></i>
              <h4>Tasks</h4>
              <span class="label">4</span>
            </div>
            <!-- tab -->
            <ul class="notification-list">
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">project3</a></span>
                  <span class="date">2 minutes ago</span>
                </div>
              </li>
             <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">project2</a></span>
                  <span class="date">12 hours ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">project6</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">project2</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              
            </ul>
          </li>
          <li class="notification-group">
            <div class="notification-tab">
              <i class="fa fa-bug"></i>
                <h4>Bugs</h4>
                <span class="label">2/8</span>
            </div> <!-- tab -->
            <ul class="notification-list">
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project1</a></span>
                  <span class="date">2 minutes ago</span>
                </div>
              </li>
             <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project2</a></span>
                  <span class="date">12 hours ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project3</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project4</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project5</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project6</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project7</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@project8</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              
            </ul>
            <!-- list -->
          </li>
          <li class="notification-group">
            <div class="notification-tab">
              <i class="fa fa-envelope"></i>
              <h4>Messages</h4>
              <span class="label">3</span>
            </div>
            <ul class="notification-list">
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@mstrlaw</a></span>
                  <span class="date">2 minutes ago</span>
                </div>
              </li>
             <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@mstrlaw</a></span>
                  <span class="date">12 hours ago</span>
                </div>
              </li>
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@mstrlaw</a></span>
                  <span class="date">2 days ago</span>
                </div>
              </li>
              
            </ul>
          </li>
          <li class="notification-group">
            <div class="notification-tab">
              <i class="fa fa-calendar"></i>
              <h4>Calendar</h4>
              <span class="label">2</span>
            </div>
            <ul class="notification-list">
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@mstrlaw</a></span>
                  <span class="date">tomorrow</span>
                </div>
              </li>
             <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">@mstrlaw</a></span>
                  <span class="date">in 2 days</span>
                </div>
              </li>
            </ul>
          </li>
          <li class="notification-group">
            <div class="notification-tab">
              <i class="fa fa-trophy"></i>
              <h4>Badges</h4>
              <span class="label">2</span>
            </div>
            <ul class="notification-list">
              <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">technical</a></span>
                  <span class="date">2 weeks ago</span>
                </div>
              </li>
             <li class="notification-list-item">
                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <div class="item-footer">
                  <span class="from"><a href="#">personal</a></span>
                  <span class="date">3 weeks ago</span>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </li>
    <li class="right">
      <a href="#" class="menu-link square">Link #2</a>
    </li>
    <li class="right">
      <a href="#" class="menu-link square">Link #1</a>
    </li>
  </ul>
</nav>

<div class="content">
  <h2>Click on the notification icon on the top right corner.</h2>
  <p>A simple notification menu with several categories. Each category act as an accordion when clicking. Menu is also responsive, hiding the list titles on smaller device.</p>
  <p>Todo:</p>
  <ul>
    <li>Embelish internal items</li>
    <li>move to React.js</li>
  </ul>
  <hr />
  <h4>A random ul to test scroll</h4>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>


<script type="text/javascript"></script>


<!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Refferal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
        <div class="col-lg-6">
            <br>
                  <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" value="{{$user->email}}" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" value="{{$user->password}}" id="inputPassword4" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" value="{{$user->address}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" value="{{$user->city}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">City</label>
                          <input type="text" class="form-control" value="{{$user->city}}" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState">State</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                      </div>
                      
                      
                    </form>
        </div>
        <div class="col-lg-6">
            
        </div>
    </div>  

      
      
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
        
        <div class="col-lg-6">
           
            <br>
            @if(Auth::user()->affiliate_id)
                <div class="form-group">
                    <label for="inputAddress">Your Affiliate Link</label>
                    <input type="text" class="form-control" value="{{url('/register').'/?ref='.Auth::user()->affiliate_id}}">
                 </div>
                
            @endif
            
            
        </div>
        
        
        <div class="col-lg-6">
            <?php


if(Auth::user()->affiliate_id){

echo " <div>
     <h4>share your affiliate link with others</h4>
 </div>";
$url = url('/register').'/?ref='.Auth::user()->affiliate_id;

$share = Share::page($url)
	->facebook()
	->twitter()
	->googlePlus()
	->linkedin('Extra linkedin summary can be passed here')
	->whatsapp();


echo $share;

}
?>
        </div>
        <div class="col-lg-6">
            
<?php

echo "<h4>Reffered By</h4>";
use App\User;

$user_referal = Auth::user()->referred_by;

echo $user_referal;
if($user_referal != null){
    $referer_info = User::where('affiliate_id',$user_referal)->get();

    foreach($referer_info as $refer){
        echo "<h2>$refer->name<h2>";
        echo "<h2>$refer->email<h2>";
    }
}





?>


        </div>
        
        
    </div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div> -->

@endsection