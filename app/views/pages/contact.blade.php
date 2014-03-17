@extends('layouts.master')

@section('content')
 <div id="templatemo_page_intro">
    	<h1>Contact</h1>
        <p>Aenean mattis consequat condimentum. Pellentesque eleifend, enim a interdum malesuada, mi nisl pellentesque dolor, et ornare ipsum neque eget metus. Nunc nec nisl ipsum.</p>
    </div>
    
    <div id="templatemo_main">
    	<div class="col_32 left">
            <div id="contact_form">
                <h2>Contact Form</h2>
                <form method="post" name="contact" action="#">
                
                <div class="col_3 left">                
                    <label for="fullname">Name:</label> 
                    <input name="fullname" type="text" class="input_field" id="fullname" maxlength="30" />
                    
                  	<label for="email">Email:</label> 
               	  <input name="email" type="text" class="input_field" id="email" maxlength="30" />
                    
                    <label for="subject">Subject:</label> 
                    <input name="subject" type="text" class="input_field" id="subject" maxlength="30" />
				</div>
                
                <div class="col_3 right">
                    <label for="message">Message:</label> 
                    <textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
				</div>
                
                <div class="clear"></div>
                 	<input type="submit" name="Submit" value="Submit" class="submit_btn" />
                 
                </form>
            </div>    
        </div> 
                
		<div class="col_3 right">
			<h2>Our Offices</h2>
			<div class="sidebar_section">
                <h3>Location One</h3>
                930-960 Nullam lacus diam,<br />
                Pulvinar sit amet convallis, 10880<br />
                Lorem ipsum dolor<br /><br />
                
                Tel: 090-010-4400<br />
                Fax: 090-010-6600<br /><br />
                
                Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>
			</div>
            <div class="sidebar_section">
                <h3>Location Two</h3>
                840-850 Donec vitae dui nisi,<br />
                Duis gravida, Vestibulum, 10990<br />
                Pellentesque et fermentum<br /><br />
                
                Tel: 080-010-1100<br />
                Fax: 080-010-2200 
			</div>
      </div>
        
      <div class="clear"></div>
      
      <iframe width="960" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                
    </div> <!-- END of main -->

    @stop