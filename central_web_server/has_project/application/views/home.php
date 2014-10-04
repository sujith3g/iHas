<?php

/* This file home.php is part of has_project project
 * Created on Apr 18, 2013  @ 5:29:05 PM
 * ============================================
 *                                            * 
 *       Developer : Sujith G                 * 
 *                   sujith3g@gmail.com       *
 *                                            *   
 * ============================================
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id='top_nav'>
    
    <div id="all_on"></div>
    <div id="all_off"></div>
    <div id="refresh"></div>
<?php
if($this->session->userdata('h_device')) 
    echo "<li id='sign_out' type='button' ></li>";
?>
    </div>
<audio id="beep">
    <source src="<?php echo base_url();?>img/tick.wav"></source>
Your browser isn't invited for super fun audio time.
</audio>

<script src="<?php echo base_url();?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/java_script.js" type="text/javascript"></script>
<div id="content">
<div class="bulb_wrapper">
    <div class="bulb" id="dev1"  ip="<?php echo $dev_ip;?>" >bulb 1</div>
    <img class="button" src="<?php echo base_url();?>img/button_1.png" id="but1" ></img>
    </div>
<div class="bulb_wrapper">
    <div class="bulb" id="dev2"  ip="<?php echo $dev_ip;?>" >bulb 2</div>
    <img class="button" src="<?php echo base_url();?>img/button_1.png" id="but2" ></img>
</div>
    <div class="bulb_wrapper">
    <div class="bulb" id="dev3"  ip="<?php echo $dev_ip;?>" >bulb 3</div>
    <img class="button" src="<?php echo base_url();?>img/button_1.png" id="but3" ></img>
    </div>
<div class="bulb_wrapper">
    <div class="bulb" id="dev4"  ip="<?php echo $dev_ip;?>" >bulb 4</div>
    <img class="button" src="<?php echo base_url();?>img/button_1.png" id="but4" ></img>
</div>
    <a href="http://<?php echo $dev_ip;?>:8082/" target="blank">
    <input type="button" value="survilence camera" /></a>
</div>

    
    
    <style>  
        
        
        #all_off{
            z-index: 10;
            height: 80px;
            width: 100px;
            margin-top: 3.9%;
            margin-left: 12%;
            display: inline-block;
            float: left;
            cursor:pointer;
            background: url(<?php echo base_url();?>img/buttonalloff1.png);
        }
        #all_on{
            z-index: 10;
            height: 80px;
            width: 100px;
            margin-top: 3.9%;
            margin-left: 12%;
            display: inline-block;
            float: left;
            cursor:pointer;
            background: url(<?php echo base_url();?>img/buttonallon1.png);
        }
        #refresh{
            z-index: 10;
            height: 80px;
            width: 100px;
            margin-top: 3.9%;
            margin-left: 12%;
            display: inline-block;
            float: left;
            cursor:pointer;
            background: url(<?php echo base_url();?>img/refresh1.png);
        }
        #sign_out{
                        z-index: 10;
            display: inline-block;
            margin-top: 3.9%;
            margin-left: 12%;
            background: url(<?php echo base_url();?>img/logout1.png);
            height: 80px;
            width: 100px;
            cursor:pointer;
            float: left;
        }
        #top_nav{
            display: inline-block;
            z-index: 1;
            height: 145px;
            margin-left: 10%;
            width:80%;
            background: url(<?php echo base_url();?>img/menubar.png);
        }
        #content{
            
            display: block;
            position: relative;
            width: 80%;
            left: 13%;
            height: 100%;
            background: url(<?php echo base_url();?>img/background.png);
        }
        
        .bulb_wrapper{
            position: relative;
            display: block;
            height: 110px;
            width: 80%;
        }
        .bulb_wrapper img{
            
            position: relative;
            display: inline-block;
            height: 70px;
            #width: 85%;
           top: 78%;
            left: 72%;
            cursor: pointer;
        }
        .bulb{
            top: 32%;
            display:inline-block;
            background: url(<?php echo base_url();?>img/bulb_1.png);
            height: 100px;
            width: 70px;
            height: 100px;
            left: 20%;
            cursor: pointer;
            position: relative;
            }
            #content a{
                position: relative;
                margin: right;
                    
            }
    </style>