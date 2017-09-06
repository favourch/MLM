<!--<link href="https://cdn.jsdelivr.net/bootstrap.fileinput/4.3.5/css/fileinput.min.css" rel="stylesheet">  -->      

  <!-- Modal -->
   
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF">{$getplayerdetails[0].first_name} Profile </h4>
          <span style="color:#FFF">{if $getplayerdetails[0].user_types_id eq 1}Bats Man{elseif $getplayerdetails[0].user_types_id eq 2}Bowler{elseif $getplayerdetails[0].user_types_id eq 3}Wicket Keeper{elseif $getplayerdetails[0].user_types_id eq 4}All Rounder{/if}</span>
        </div>
        <div class="modal-body">
       <div class="cricbench-form">
        <div class="cricbench-form-wrapper">
            <div class="cricbench-form-main">
               	<form method="post" name="id_player_profile_update" id="id_player_profile_update" enctype="multipart/form-data">
        			<input type="hidden" value="{$user_ID}" name="uid" />
                    
                <div class="row">
                    <div class="col-md-5">                        
                        <div class="row">
                            <div class="col-xs-7">
                                <div id="kv-avatar-errors-1" class="center-block" style="display:none"></div>
                               
                                    <div class="kv-avatar center-block">
                                    	<div id="id_avatar_show" {if $getplayerdetails[0].profile_photo neq ''} style="display:none !important;" {/if} >
                                        <input id="avatar-1" name="profile_image" type="file" class="file-loading">
                                        </div>
                                        {if $getplayerdetails[0].profile_photo neq ''}
                                        <div id="id_ex_pic">
                                        <img src="{$img_path}{$getplayerdetails[0].profile_photo}" alt=""/><br /><br />
                                        <div class="col-md-6 cricbench-input"><input type="button" id="id_player_profile_pic_remove" name="player_profile_pic_remove"   value="Remove" ></div>
                                        </div>
	                                    {/if}
                                    </div>                            
                              <div class="clearfix"></div>
                            </div>
                            <div class="col-xs-4">
                                <div class="cricbench-player-name"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7" >
                        <div class="cricbench-form-table" >
<!------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------ Mani Form Starts ------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------>	
                              
                                <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right margin-T15"><label>Gender</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="cricbench-input cricbench-input-radio margin-T15">
                                                <input type="radio" name="gender" id="gender" value='Male' {if $getplayerdetails[0].gender eq 'Male'} checked="checked"{/if}>
                                                <label for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="cricbench-input cricbench-input-radio margin-T15">
                                                <input type="radio"  name="gender" id="gender" value='Fe-male' {if $getplayerdetails[0].gender eq 'Fe-male'} checked="checked"{/if}>
                                                <label for="female">Female</label>
                                            </div>
                                        </div>                                        
                                    </div>                                         
                                    
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>D O B</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <div class="cricbench-input ">
                                               <input type="text" class="form-control" id="datepicker1" name="dateofbirth" value="{$getplayerdetails[0].dob}">
                                            </div>
                                        </div>                                 
                                    </div>                                         
                                </div>
                            </div>
<!------------------------------------------------ BATSMAN SECTION STARTS ------------------------------------------------------------------------------------>	
                            {if $cur_User_Type eq 1}
							<div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label></label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                <select name="bstyle" id="bstyle">
                                                    <option value="" >Batting Style </option>
                                                     {html_options options=$ARRAY_STYLE selected=$getplayerdetails[0].batting_hand_style}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                <select id="order" name="order">
                                                	<option value="">Batting Order </option>
                                                    {html_options options=$getOrderType selected=$getplayerdetails[0].batting_order_id}
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                         
                                    
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Best Score</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="highest" name="highest" placeholder="Best Score" value="{$getplayerdetails[0].highest}">
                                    </div>
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                      <div class="cricbench-input text-right" style="margin-top:70px" ><label>Performance</label></div>                              
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row margin-T20">
                                        
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>100's</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="100s" name="100s" placeholder="No of 100's" value="{$getplayerdetails[0].hundreds}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>50's</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="50s" name="50s" placeholder="No of 50's" value="{$getplayerdetails[0].fifties}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        <div class="cricbench-input  margin-T10"><label>30's</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="30s" name="30s" placeholder="No of 30's" value="{$getplayerdetails[0].thirty}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
							
<!------------------------------------------------BATSMAN  SECTION ENDS --------------------------------------------------------------------------------------->
<!------------------------------------------------ BOWLING SECTION STARTS ------------------------------------------------------------------------------------>
							
                            {elseif $cur_User_Type eq 2}
							<div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label></label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                <select name="bwstyle" id="bwstyle">
                                                    {html_options options=$ARRAY_STYLE selected=$getplayerdetails[0].bowling_hand_style}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                <select id="btype" name="btype" >
                                                    <option value="">Bowling Type</option>
                                                     {html_options options=$getBowlingCategories selected=$getplayerdetails[0].bowling_category_id}
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                         
                                    
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Total Wickets</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="totalwickets" name="totalwickets" placeholder="(eg) 100"  value="{$getplayerdetails[0].total_wickets}">
                                    </div>
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                     <div class="cricbench-input text-right margin-T20" style="margin-top:70px" ><label>performance</label></div>                               
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row margin-T20">
                                        <div class="col-xs-2 col-sm-4">
											<div class="cricbench-input  margin-T10"><label>Best Bowling</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="bestbowling" name="bestbowling" placeholder="Best Bowling" value="{$getplayerdetails[0].best_bowling}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>5 Wkts</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="5wickets" name="5wickets" placeholder="No of 5wickets" value="{$getplayerdetails[0].five_wicket}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>Hat-trick </label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="noofhattrick" name="noofhattrick" placeholder="No of Hat trick" value="{$getplayerdetails[0].hattrick_wickets}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
							
<!------------------------------------------------BOWLING SECTION ENDS --------------------------------------------------------------------------------------->
<!------------------------------------------------ WICKET KEEPER SECTION STARTS ------------------------------------------------------------------------------------>
							
                            {elseif $cur_User_Type eq 3}
							<div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label></label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                <select name="bstyle" id="bstyle">
                                                    <option value="">Batting Style</option>
                                                     {html_options options=$ARRAY_STYLE selected=$getplayerdetails[0].batting_hand_style}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                 <select id="order" name="order">
                                                	<option value="">Batting Order </option>
                                                	 {html_options options=$getOrderType selected=$getplayerdetails[0].batting_order_id}
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                         
                                    
                                </div>
                            </div>
                            
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                       <div class="cricbench-input text-right margin-T20" style="margin-top:70px" ><label>Performance</label></div>                        
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row margin-T20">
                                        <div class="col-xs-2 col-sm-4">
                                        <div class="cricbench-input  margin-T10"><label>Highest</label></div>
                                            <div class="cricbench-input">
                                               <input type="text" id="highest" name="highest" placeholder="(eg) 233*" value="{$getplayerdetails[0].highest}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>100's</label></div>
                                            <div class="cricbench-input">
                                                 <input type="text" id="100s" name="100s" placeholder="No of 100's" value="{$getplayerdetails[0].hundreds}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>Dismissals</label></div>
                                            <div class="cricbench-input">
                                                <input type="text"  id="highestdismissals" name="highestdismissals" placeholder="(eg) 4" value="{$getplayerdetails[0].highest_dismissals}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
<!------------------------------------------------WICKET KEEPER SECTION ENDS --------------------------------------------------------------------------------------->
<!------------------------------------------------ ALL - ROUNDER SECTION STARTS ------------------------------------------------------------------------------------>	
                            {elseif $cur_User_Type eq 4}
							<div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label></label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                <select name="bstyle" id="bstyle">
                                                    <option value="" >Batting Style </option>
                                                    {html_options options=$ARRAY_STYLE selected=$getplayerdetails[0].batting_hand_style}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                <select id="bwstyle" name="bwstyle">
                                                	<option value="">Bowling Style </option>
                                                	 {html_options options=$ARRAY_STYLE selected=$getplayerdetails[0].batting_hand_style}
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                         
                                    
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label></label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                                 <select id="order" name="order">
                                                	<option value="">Batting Order </option>
                                                    {html_options options=$getOrderType selected=$getplayerdetails[0].batting_order_id}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cricbench-input">
                                               
                                                <select id="btype" name="btype" >
                                                    <option value="">Bowling Type</option>
                                                     {html_options options=$getBowlingCategories selected=$getplayerdetails[0].bowling_category_id}
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                         
                                    
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Best Score</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="highest" name="highest" placeholder="Best Score" value="{$getplayerdetails[0].highest}">
                                    </div>
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                      <div class="cricbench-input text-right margin-T20" ><label></label></div>                                
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row margin-T20">
                                       
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>100's</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="100s" name="100s" placeholder="No of 100's" value="{$getplayerdetails[0].hundreds}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>50,s</label></div>
                                            <div class="cricbench-input">
                                                 <input type="text" id="50s" name="50s" placeholder="No of 50's" value="{$getplayerdetails[0].fifties}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input  margin-T10"><label>30's</label></div>
                                            <div class="cricbench-input">
                                               <input type="text" id="30s" name="30s" placeholder="No of 30's" value="{$getplayerdetails[0].thirty}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Total Wickets</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="totalwickets" name="totalwickets" placeholder="(eg) 100"  value="{$getplayerdetails[0].total_wickets}">
                                    </div>
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                     <div class="cricbench-input text-right margin-T20"  ><label></label></div>                               
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row margin-T20">
                                        <div class="col-xs-2 col-sm-4">
											<div class="cricbench-input  margin-T10"><label>Best Bowling</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="bestbowling" name="bestbowling" placeholder="Best Bowling" value="{$getplayerdetails[0].best_bowling}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>5 Wkts</label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="5wickets" name="5wickets" placeholder="No of 5wickets" value="{$getplayerdetails[0].five_wicket}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-4">
                                        	<div class="cricbench-input margin-T10"><label>Hat-trick </label></div>
                                            <div class="cricbench-input">
                                                <input type="text" id="noofhattrick" name="noofhattrick" placeholder="No of Hat trick" value="{$getplayerdetails[0].hattrick_wickets}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              {/if}
<!------------------------------------------------ ALL- ROUNDER SECTION ENDS --------------------------------------------------------------------------------------->

							<div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                       <div class="cricbench-input text-right margin-T20"><label>Location</label></div>                       
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row margin-T20">
                                        <div class="col-xs-2 col-sm-6">
                                        <div class="cricbench-input "><label>Current City</label></div>
                                            <div class="cricbench-input">
                                               <input type="text" id="city" name="city" placeholder="Your Current City" value="{$getplayerdetails[0].city}">
                                            </div>
                                        </div>
                                        <div class="col-xs-2 col-sm-6">
                                        	<div class="cricbench-input"><label>Current Area</label></div>
                                            <div class="cricbench-input">
                                                 <input type="text" id="area" name="area" placeholder="Your Current Area" value="{$getplayerdetails[0].area}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label></label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="row">
                                        <div class="col-sm-4">
                                           
                                            <div class="cricbench-input">
                                                <select  id="state" name="state" onchange="dist_filter()">
                                                    <option>State</option>
                                                     {html_options options=$player_location selected=$getplayerdetails[0].state}
                                                </select>
                                            </div>
                                        </div>
                                          <input type="hidden" name="selecteddistric" id="selecteddistric" value="{$getplayerdetails[0].district}" />
                                        <div class="col-sm-4">
                                             <div class="cricbench-input">
                                                <select id="district" name="district">
                                                    <option>District</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="cricbench-input">
                                               <input type="text" id="country" name="country"  value="INDIA" readonly>
                                            </div>
                                        </div>
                                    </div>                                         
                                    
                                </div>
                            </div>
                            
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Pincode</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text"id="pincode" name="pincode" placeholder="(eg) 600017" value="{$getplayerdetails[0].pincode}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Division</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <!--<input type="text" placeholder="(eg) SOUTH ZONE" id="division" name="division" value="{$getplayerdetails[0].division}">-->
                                         <select id="division" name="division">
                                        	<option value="">Division</option>
                                             {html_options options=$ARRAY_DIVISION selected={$getplayerdetails[0].division}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                         </div>   
                            
                            
                         <!--------------------- PERSONAL DETAILS STARTS ----------------------->
                            
                        <h3 class="moredetails-view col-md-12">Personal Details</h3>
                        <div class="cricbench-form-table show-hide">
                        	<div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right btn btn-danger" id="reset_pwd_btn"><label>Reset Password</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="reset_pwd" name="reset_pwd" placeholder="Enter Your New Password" style="display:none" >
                                    </div>
                                </div>
                            </div>
                        	 <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Email Id</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="emailid" name="emailid"  value="{$getplayerdetails[0].email_id}" onchange="javascript:emailavailablity();" >
                                        <span id="emailcheckalert" style="color:#FFF"></span>
                                    </div>
                                </div>
                            </div>
                             <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Contact Number</label></div>
                                    
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="contactno" name="contactno"  value="{$getplayerdetails[0].contact_no}" onchange="javascript:contactnoavailablity();">
                                        <span id="contactcheckalert" style="color:#FFF"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>First Name</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="fname" name="fname"  value="{$getplayerdetails[0].first_name}" placeholder="First Name">
                                    </div>
                                </div>
                            </div>  
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Last Name</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="lname" name="lname"  value="{$getplayerdetails[0].last_name}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Nick Name</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="nickname" name="nickname" value="{$getplayerdetails[0].nick_name}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Occuopation</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="occuopation" name="occuopation" value="{$getplayerdetails[0].occuopation}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>About Me</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <textarea id="aboutme" name="aboutme">{$getplayerdetails[0].aboutme}</textarea>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        
                        <!--------------------- PERSONAL DETAILS ENDS ----------------------->
                        <!---------------------- OTHER DETAILS STARTS -------------------------->
                         <div class="cricbench-form-table" >
                        <h3 class="moredetails-view">Other Details</h3>
                        <div class="cricbench-form-table show-hide col-md-12">
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Matches</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="matches" name="matches" placeholder="(eg) 123" value="{$getplayerdetails[0].matches}">
                                    </div>
                                </div>
                            </div>
                            {if $cur_User_Type neq 2}
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Total Runs</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="totalruns" name="totalruns" placeholder="(eg) 123" value="{$getplayerdetails[0].total_runs}">
                                    </div>
                                </div>
                            </div>
                             {/if}
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Man Of The Match</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="manofthematch" name="manofthematch" placeholder="(eg) 4" value="{$getplayerdetails[0].man_of_the_match}">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>State Division</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text"id="statedivision" name="statedivision"  value="{$getplayerdetails[0].state_division_id}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>District Division</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="districtdivision" name="districtdivision"  value="{$getplayerdetails[0].district_division_id}">
                                    </div>
                                </div>
                            </div>-->
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Achievement</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="achievements" name="achievements" placeholder="(eg) TPL Trophy" value="{$getplayerdetails[0].achievement}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Tournament</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="tournament" name="tournament" placeholder="(eg) TPL" value="{$getplayerdetails[0].tournament}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Current Coach</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="currentcoach" name="currentcoach" placeholder="(eg) Rajan" value="{$getplayerdetails[0].current_coach}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>My Coaches</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="mycoaches" name="mycoaches" placeholder="(eg) Rajan,kannan" value="{$getplayerdetails[0].my_coaches}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Played Teams</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="playedteams" name="playedteams" placeholder="(eg) tcl" value="{$getplayerdetails[0].played_teams}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Current Team</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="currentteam" name="currentteam" placeholder="(eg) kvc" value="{$getplayerdetails[0].current_team}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Club Team</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="clubteam" name="clubteam" placeholder="(eg) kvc" value="{$getplayerdetails[0].club_team}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Norms Team</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="normsteam" name="normsteam" placeholder="(eg) kvc" value="{$getplayerdetails[0].norms_team}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>My Camp</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="mycamp" name="mycamp" placeholder="(eg) state camp" value="{$getplayerdetails[0].my_camp}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Practice Ground</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="practiceground" name="practiceground" placeholder="(eg) tnagar" value="{$getplayerdetails[0].practice_ground}">
                                    </div>
                                </div>
                            </div>
                            {if $getplayerdetails[0].user_types_id eq 1}
                                <div class="cricbench-form-row">
                                    <div class="cricbench-form-col">
                                        <div class="cricbench-input text-right"><label>Favorite Shot</label></div>
                                    </div>
                                    <div class="cricbench-form-col">
                                        <div class="cricbench-input">
                                            <input type="text" id="favshot" name="favshot" placeholder="(eg) straight drive" value="{$getplayerdetails[0].fav_shot}">
                                        </div>
                                    </div>
                                </div>
                            {elseif $getplayerdetails[0].user_types_id eq 2}
                                <div class="cricbench-form-row">
                                    <div class="cricbench-form-col">
                                        <div class="cricbench-input text-right"><label>Favorite Ball</label></div>
                                    </div>
                                    <div class="cricbench-form-col">
                                        <div class="cricbench-input">
                                            <input type="text" id="favbowl" name="favbowl" placeholder="(eg) shot ball" value="{$getplayerdetails[0].fav_ball}">
                                        </div>
                                    </div>
                                </div>
                            {elseif $getplayerdetails[0].user_types_id eq 4}
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Favorite Shot</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="favshot" name="favshot" placeholder="(eg) straight drive" value="{$getplayerdetails[0].fav_shot}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Favorite Ball</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="favbowl" name="favbowl" placeholder="(eg) shot ball" value="{$getplayerdetails[0].fav_ball}">
                                    </div>
                                </div>
                            </div>
                            {/if}
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Favorite Trophy</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="favouritetrophy" name="favouritetrophy" placeholder="(eg) ccl" value="{$getplayerdetails[0].fav_trophy}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Favorite Player</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="favouriteplayer" name="favouriteplayer" placeholder="(eg) sachin" value="{$getplayerdetails[0].fav_player}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Favorite Ground</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="favground" name="favground" placeholder="(eg) tnagar" value="{$getplayerdetails[0].fav_ground}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Favorite Match</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="favmatch" name="favmatch" placeholder="(eg)ind vs pak" value="{$getplayerdetails[0].fav_match}">
                                    </div>
                                </div>
                            </div>
                            <div class="cricbench-form-row">
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input text-right"><label>Favorite Team</label></div>
                                </div>
                                <div class="cricbench-form-col">
                                    <div class="cricbench-input">
                                        <input type="text" id="favteam" name="favteam" placeholder="(eg)Pakisthan" value="{$getplayerdetails[0].fav_team}">
                                    </div>
                                </div>
                            </div>                         
                        </div>
                       <!---------------------- OTHER DETAILS ENDS -------------------------->
                      <div class="col-md-12 cricbench-input margin-T20" ><input type="button" id="player_profile_update" name="player_profile_update" class="form-control"  value="Update"></div>
                     <!-- <div class="col-md-6 cricbench-input margin-T20" ><input type="button" value="Clear" class="form-control"></div>-->
                       
                    <!---------------------------------------------------------------------------------------------------------------------------------------->
                    <!---------------------------------- Mani Form Ends -------------------------------------------------------------------------------------->
                    <!---------------------------------------------------------------------------------------------------------------------------------------->                         
                        	</div>
                            
                    	</div>
                	</div>
            	</div>
               
            	</div>
            </form>
       		</div>  
  		</div>
     </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
   
                          
<script src="{$HTTP_PATH}/js/script.js"></script>
<script src="{$HTTP_PATH}/scripts/common.js"></script>


<style>
.cricbench-form{ position:static; overflow:visible}
.cricbench-form .cricbench-form-wrapper{ position:static; padding:0}
</style>