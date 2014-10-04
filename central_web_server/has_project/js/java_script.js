/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
       base_url="http://localhost/has_project/";
       ip = $('#dev1').attr('ip');
       var beepOne = $("#beep")[0];
       $('#sign_out').click(function (){
           window.location=base_url+"sign_out";
       });
        $.post("http://"+ip+"/raspi.php",{type:'command',cmd:'get'},function(data){
            
            $('#dev1').attr('status',data[0]);
            $('#dev2').attr('status',data[1]);
            $('#dev3').attr('status',data[2]);
            $('#dev4').attr('status',data[3]);
            $('.bulb_wrapper').each(function(index){
                
            div = $(this).find('div');
            img = $(this).find('img');
        console.log(index + div.attr('status'));
          div.css('background','url(\''+base_url+'img/bulb_'+div.attr('status')+'.png\')');
          img.attr('src',base_url+'img/button_'+div.attr('status'));
       });    
        });
        
    
    /*$('#dev1').click(function(){
        
        //ip = "";
        //alert("http://"+ip+"/raspi.php");
        $.post("http://"+ip+"/raspi.php",{type:'data',devno:'dev1',status:'ON'},function(data){
            //alert(data);
        });
        
    });*/
    $('.bulb_wrapper').click(function(){
        beepOne.play();
        div = $(this).find('div');
        img = $(this).find('img');
        if(div.attr('status')==="1"){
        div.css('background','url(\''+base_url+'img/bulb_0.png\')');
        img.attr('src',base_url+"img/button_0.png");
        div.attr('status','0');
        $.post("http://"+ip+"/raspi.php",{type:'data',devno:div.attr('id'),status:'OFF'},function(){
            //alert('done');
        });
        }
    else {
        div.css('background','url(\''+base_url+'img/bulb_1.png\')');
        div.attr('status','1');
        img.attr('src',base_url+"img/button_1.png");
        $.post("http://"+ip+"/raspi.php",{type:'data',devno:div.attr('id'),status:'ON'},function(){
            //alert('done');
        });
    }
    });
    //$('.bulb').//
    $('#refresh').click(function(){
        $.post("http://"+ip+"/raspi.php",{type:'command',cmd:'get'},function(data){
            
            $('#dev1').attr('status',data[0]);
            $('#dev2').attr('status',data[1]);
            $('#dev3').attr('status',data[2]);
            $('#dev4').attr('status',data[3]);
            $('.bulb_wrapper').each(function(index){
                
            div = $(this).find('div');
            img = $(this).find('img');
        console.log(index + div.attr('status'));
          div.css('background','url(\''+base_url+'img/bulb_'+div.attr('status')+'.png\')');
          img.attr('src',base_url+'img/button_'+div.attr('status'));
       });    
        });
        //alert('all on');
    });
     $('#all_on').click(function(){
        $.post("http://"+ip+"/raspi.php",{type:'command',cmd:'allon'},function(data){
            
            $('#dev1').attr('status','1');
            $('#dev2').attr('status','1');
            $('#dev3').attr('status','1');
            $('#dev4').attr('status','1');
            $('.bulb_wrapper').each(function(index){
                
            div = $(this).find('div');
            img = $(this).find('img');
        console.log(index + div.attr('status'));
          div.css('background','url(\''+base_url+'img/bulb_'+div.attr('status')+'.png\')');
          img.attr('src',base_url+'img/button_'+div.attr('status'));
       });    
        });
        //alert('all on');
    });
    $('#all_off').click(function(){
        $.post("http://"+ip+"/raspi.php",{type:'command',cmd:'alloff'},function(data){
            
            $('#dev1').attr('status','0');
            $('#dev2').attr('status','0');
            $('#dev3').attr('status','0');
            $('#dev4').attr('status','0');
            $('.bulb_wrapper').each(function(index){
                
            div = $(this).find('div');
            img = $(this).find('img');
        console.log(index + div.attr('status'));
          div.css('background','url(\''+base_url+'img/bulb_'+div.attr('status')+'.png\')');
          img.attr('src',base_url+'img/button_'+div.attr('status'));
       });    
        });
        //alert('all on');
    });
});

