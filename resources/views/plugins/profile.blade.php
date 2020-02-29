<div class="container text-uppercase">

<body class="hold-transition sidebar-mini">
    <style>
.profile-pic {
	position: relative;
	display: inline-block;
}

.profile-pic:hover .edit {
	display: block;
}

.edit {
	padding-top: 7px;
	padding-right: 7px;
	/*position: absolute;*/
	right: 0;
	top: 0;
}

.edit a {
	color: #000;
}    </style>
 <div class="wrapper">
     <section class="content">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-3">
             <div class="card card-primary card-outline">
               <div class="card-body box-profile">
                 <div class="text-center">
                   <img class="profile-user-img img-fluid profile-pic"
                 src="{{url('images/photograph')}}/{{$profile->photograph}}"
                        alt="{{$profile->name}}'s profile picture">
                        <div class="edit"><a href="#pfrofilePicEdit" data-toggle="modal" data-target="#exampleModalOfProfile"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>

                        <img src="{{url('images/signature')}}/{{$profile->signature}}" alt="{{$profile->name}}'s profile signature" srcset="" style="
                        height: 100px;
                        width: 200px;
                    ">
                        <div class="edit"><a href="#signatureEdit" data-toggle="modal" data-target="#exampleModalOfsignature"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                    </div>
                 <h3 class="profile-username text-center text-uppercase"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;{{$profile->name}}</h3>

                 <p class="text-muted text-center text-uppercase"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;{{$profile->eduQualificaton}} <br/> <?php
                 if($profile->eduQualificaton === 'Others'){
                     echo $profile->otherQualification;
                 }
                 ?> </p>
                  <!-- Modal for changing profile Pic-->
                  <div class="modal fade" id="exampleModalOfProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Update Profile Pic</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{route('other.update', ['id' =>  \Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
                          @method('put')
                          @csrf
                          <div class="form-group">
                            <label for="profilePic">Update Profile Pic</label>
                            <input required type="file" class="form-control-file" name="profilePic" id="profilePic" placeholder="Profile Pic" aria-describedby="prfile Pic">
                            <small id="prfile Pic" class="form-text text-muted">Update Profile Pic</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Update Profile Pic</button>
                        </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal for changing sinature Pic-->
                  <div class="modal fade" id="exampleModalOfsignature" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Signature Image</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{route('other.update', ['name' => \Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
                          @method('put')
                          @csrf
                          <div class="form-group">
                            <label for="updateSignature">Update Signature Pic</label>
                            <input required type="file" class="form-control-file" name="updateSignature" id="updateSignature" placeholder="Updatesignature Pic" aria-describedby="updateSignature">
                            <small id="updateSignature" class="form-text text-muted">Update Your Signature</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Update Signature</button>
                        </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                {{-- <ul class="list-group list-group-unbordered mb-3">
                   <li class="list-group-item">
                     <b>Followers</b> <a class="float-right">1,322</a>
                   </li>
                   <li class="list-group-item">
                     <b>Following</b> <a class="float-right">543</a>
                   </li>
                   <li class="list-group-item">
                     <b>Friends</b> <a class="float-right">13,287</a>
                   </li>
                 </ul>
                 <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
               </div>
             </div>
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title text-uppercase">About Me</h3>
               </div>
               <div class="card-body">
                 <strong><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Education</strong>

                 <p class="text-muted text-uppercase">
                    {{$profile->eduQualificaton}}
                    <p>
                       <b>
                    <?php if($profile->eduQualificaton === 'Others'){
                        echo $profile->otherQualification;
                    }
                    ?></b>
                    </p>
                 </p>

                 <hr>

                 <strong><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Location</strong>

                <p class="text-muted">{{$profile->addOne}}, {{$profile->addTwo}}, {{$profile->cityVilage}}, {{$profile->district}}, {{$profile->state}}, {{$profile->pinCode}}</p>

                 <hr>
{{--
                 <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                 <p class="text-muted">
                   <span class="tag tag-danger">UI Design</span>
                   <span class="tag tag-success">Coding</span>
                   <span class="tag tag-info">Javascript</span>
                   <span class="tag tag-warning">PHP</span>
                   <span class="tag tag-primary">Node.js</span>
                 </p>

                 <hr>

                 <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> --}}
               </div>
             </div>
           </div>
           <div class="col-md-9">
             <div class="card">
               <div class="card-header p-2">
                 <ul class="nav nav-pills">
                   <li hiddem class="nav-item"><a hidden class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                   <li hidden class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                   <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Update Profile</a></li>
                 </ul>
               </div>
               <div class="card-body">
                 {{-- <div class="tab-content">
                   <div class="active tab-pane" id="activity">
                     <div class="post">
                       <div class="user-block">
                         <img class="img-circle img-bordered-sm" src="" alt="user image">
                         <span class="username">
                           <a href="#">Jonathan Burke Jr.</a>
                           <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                         </span>
                         <span class="description">Shared publicly - 7:30 PM today</span>
                       </div>
                       <p>
                         Lorem ipsum represents a long-held tradition for designers,
                         typographers and the like. Some people hate it and argue for
                         its demise, but others ignore the hate as they create awesome
                         tools to help create filler text for everyone from bacon lovers
                         to Charlie Sheen fans.
                       </p>

                       <p>
                         <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                         <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                         <span class="float-right">
                           <a href="#" class="link-black text-sm">
                             <i class="far fa-comments mr-1"></i> Comments (5)
                           </a>
                         </span>
                       </p>

                       <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                     </div>
                     <!-- /.post -->

                     <!-- Post -->
                     <div class="post clearfix">
                       <div class="user-block">
                         <img class="img-circle img-bordered-sm" src="/" alt="User Image">
                         <span class="username">
                           <a href="#">Sarah Ross</a>
                           <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                         </span>
                         <span class="description">Sent you a message - 3 days ago</span>
                       </div>
                       <!-- /.user-block -->
                       <p>
                         Lorem ipsum represents a long-held tradition for designers,
                         typographers and the like. Some people hate it and argue for
                         its demise, but others ignore the hate as they create awesome
                         tools to help create filler text for everyone from bacon lovers
                         to Charlie Sheen fans.
                       </p>

                       <form class="form-horizontal">
                         <div class="input-group input-group-sm mb-0">
                           <input class="form-control form-control-sm" placeholder="Response">
                           <div class="input-group-append">
                             <button type="submit" class="btn btn-danger">Send</button>
                           </div>
                         </div>
                       </form>
                     </div>
                     <!-- /.post -->

                     <!-- Post -->
                     <div class="post">
                       <div class="user-block">
                         <img class="img-circle img-bordered-sm" src="/" alt="User Image">
                         <span class="username">
                           <a href="#">Adam Jones</a>
                           <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                         </span>
                         <span class="description">Posted 5 photos - 5 days ago</span>
                       </div>
                       <!-- /.user-block -->
                       <div class="row mb-3">
                         <div class="col-sm-6">
                           <img class="img-fluid" src="/" alt="Photo">
                         </div>
                         <!-- /.col -->
                         <div class="col-sm-6">
                           <div class="row">
                             <div class="col-sm-6">
                               <img class="img-fluid mb-3" src="/" alt="Photo">
                               <img class="img-fluid" src="/" alt="Photo">
                             </div>
                             <!-- /.col -->
                             <div class="col-sm-6">
                               <img class="img-fluid mb-3" src="/" alt="Photo">
                               <img class="img-fluid" src="/" alt="Photo">
                             </div>
                             <!-- /.col -->
                           </div>
                           <!-- /.row -->
                         </div>
                         <!-- /.col -->
                       </div>
                       <!-- /.row -->

                       <p>
                         <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                         <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                         <span class="float-right">
                           <a href="#" class="link-black text-sm">
                             <i class="far fa-comments mr-1"></i> Comments (5)
                           </a>
                         </span>
                       </p>

                       <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                     </div>
                     <!-- /.post -->
                   </div> --}}
                   <!-- /.tab-pane -->
                   {{-- <div class="tab-pane" id="timeline">
                     <!-- The timeline -->
                     <div class="timeline timeline-inverse">
                       <!-- timeline time label -->
                       <div class="time-label">
                         <span class="bg-danger">
                           10 Feb. 2014
                         </span>
                       </div>
                       <!-- /.timeline-label -->
                       <!-- timeline item -->
                       <div>
                         <i class="fas fa-envelope bg-primary"></i>

                         <div class="timeline-item">
                           <span class="time"><i class="far fa-clock"></i> 12:05</span>

                           <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                           <div class="timeline-body">
                             Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                             weebly ning heekya handango imeem plugg dopplr jibjab, movity
                             jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                             quora plaxo ideeli hulu weebly balihoo...
                           </div>
                           <div class="timeline-footer">
                             <a href="#" class="btn btn-primary btn-sm">Read more</a>
                             <a href="#" class="btn btn-danger btn-sm">Delete</a>
                           </div>
                         </div>
                       </div>
                       <!-- END timeline item -->
                       <!-- timeline item -->
                       <div>
                         <i class="fas fa-user bg-info"></i>

                         <div class="timeline-item">
                           <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                           <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                           </h3>
                         </div>
                       </div>
                       <!-- END timeline item -->
                       <!-- timeline item -->
                       <div>
                         <i class="fas fa-comments bg-warning"></i>

                         <div class="timeline-item">
                           <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                           <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                           <div class="timeline-body">
                             Take me to your leader!
                             Switzerland is small and neutral!
                             We are more like Germany, ambitious and misunderstood!
                           </div>
                           <div class="timeline-footer">
                             <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                           </div>
                         </div>
                       </div>
                       <!-- END timeline item -->
                       <!-- timeline time label -->
                       <div class="time-label">
                         <span class="bg-success">
                           3 Jan. 2014
                         </span>
                       </div>
                       <!-- /.timeline-label -->
                       <!-- timeline item -->
                       <div>
                         <i class="fas fa-camera bg-purple"></i>

                         <div class="timeline-item">
                           <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                           <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                           <div class="timeline-body">
                             <img src="http://placehold.it/150x100" alt="...">
                             <img src="http://placehold.it/150x100" alt="...">
                             <img src="http://placehold.it/150x100" alt="...">
                             <img src="http://placehold.it/150x100" alt="...">
                           </div>
                         </div>
                       </div>
                       <!-- END timeline item -->
                       <div>
                         <i class="far fa-clock bg-gray"></i>
                       </div>
                     </div>
                   </div> --}}
                   <!-- /.tab-pane -->

                   <div class="tab-pane" id="settings">
                   <form class="form-horizontal" action="{{route('basic.update', ['id' => $profile->userID])}}" method="POST">
                    @csrf
                    @method('PUT')
                       <div class="form-group row">
                         <label for="inputName" class="col-sm-2 col-form-label"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Name</label>
                         <div class="col-sm-10">
                         <input onkeyup="this.value = this.value.toUpperCase();" type="text" name="name" value="{{$profile->name}}" class="form-control" id="inputName" placeholder="Name">
                         </div>
                       </div>
                       <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Email</label>
                        <div class="col-sm-10">
                        <input onkeyup="this.value = this.value.toUpperCase();" type="email" name="email" class="form-control" value="{{$profile->email}}" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;Phone Number</label>
                        <div class="col-sm-10">
                        <input type="number" name="mobNumber" class="form-control" value="{{$profile->Number}}" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <script type="text/javascript">
                        function CheckColors(val){
                         var element=document.getElementById('color');
                         if(val=='Other Qualification'||val=='Others')
                           element.style.display='block';
                         else
                           element.style.display='none';
                        }
                        </script>
                      <div class="form-group row">
                        <label for="eduQualificaton" class="col-sm-2 col-form-label"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Education Qualification</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="eduQualificaton" id="eduQualificaton" onchange='CheckColors(this.value);'>
                                <option selected value="{{$profile->eduQualificaton}}">{{$profile->eduQualificaton}}</option>
                                <option value="Senior Secondary">Senior Secondary</option>
                                <option value="Higher Senior Secondary">Higher Senior Secondary</option>
                                <option value="Under Graduation">Under Graduation</option>
                                <option value="Post Graduation">Post Graduation</option>
                                <option value="Professional Graduation">Professional Graduation</option>
                                <option value="ITI Graduate">ITI Graduate</option>
                                <option value="Others" >Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="color" style="display:none">
                        <label for="inputExperience" class="col-sm-2 col-form-label"><i class="fa fa-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Other Qualification ('Required')</label>
                        <div class="col-sm-10">
                          <input type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{$profile->otherQualification}}" class="form-control" name="otherQualification" id="otherQualification" aria-describedby="otherQual" placeholder="Type Your Other Qualification" >
                        </div>
                    </div>
                       <div class="form-group row">
                         <label for="inputExperience" class="col-sm-2 col-form-label"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Address</label>
                         <div class="col-sm-5">
                         <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="addOne" id="" value="{{$profile->addOne}}">
                        </div>
                        <div class="col-sm-5">
                          <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="addTwo" name="addTwo" class="form-control" id="" value="{{$profile->addTwo}}">
                        </div>
                        <div class="w-100"></div>
                        <label for="inputExperience" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                          <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="cityVilage"  class="form-control" id="" value="{{$profile->cityVilage}}">
                        </div>
                        <div class="col-sm-5">
                          <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="district" class="form-control" id="" value="{{$profile->district}}">
                        </div>
                        <div class="w-100"></div>
                        <label for="inputExperience" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                          <input type="text" onkeyup="this.value = this.value.toUpperCase();" name="state" class="form-control" id="" value="{{$profile->state}}">
                        </div>
                        <div class="col-sm-5">
                          <input type="number" name="pinCode" class="form-control" id="" value="{{$profile->pinCode}}">
                        </div>
                     </div>
                       {{-- <div class="form-group row">
                         <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                         </div>
                       </div>
                       <div class="form-group row">
                         <div class="offset-sm-2 col-sm-10">
                           <div class="checkbox">
                             <label>
                               <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                             </label>
                           </div>
                         </div>
                       </div>
                       --}}
                       <div class="form-group row">
                         <div class="offset-sm-2 col-sm-10">
                           <button type="submit" class="btn btn-danger"><i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;&nbsp;Update</button>
                         </div>
                       </div>
                     </form>
                   </div>
                   <!-- /.tab-pane -->
                 </div>
                 <!-- /.tab-content -->
               </div><!-- /.card-body -->
             </div>
             <!-- /.nav-tabs-custom -->
           </div>
           <!-- /.col -->
         </div>
         <!-- /.row -->
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->
</div>
