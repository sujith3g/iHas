<?php if(isset($Notice)) echo $Notice;?>

<?php
$this->load->helper('form');

echo "<div id='top'><div id='login'>";
echo form_open('sign_in');?>

<fieldset>
<legend>HAS_Project Log In</legend>

<label for="email">Device ID</label><input name="email" type="text" /><br />
<label for="password">Password</label><input name="password" type="password" /><br />

<div class="sign_up_buttons">
<input type="submit" value="Submit" /><input type="reset" /><br />
 
</div>
<?php
    if(isset ($err_msg))
        echo "<div id='msg'>".$err_msg."</div>";
    ?>
</fieldset>
</div>
<div id='header'><img src='<?php echo base_url();?>img/header.png'></div>
</div>
<div id="bg">
    <img src="<?php echo base_url();?>img/home-icon.png"></img>
</div>

<style>
    legend{
        font-weight: bolder;
    }
    fieldset{
        display: inline-block;
        width: 300px;
        margin: 10px;
        border-radius:5px;
        border-color: deepskyblue;
    } 
    .sign_up_buttons{
        display: block;
        position: relative;
        
        left: 28%;
    }
    input{
        border-radius:5px;
    }
    label{
        margin: 5px;
        padding: 5px;
    }
    input{
        margin: 10px;
    }
    #msg{
        color: #990000;
    }
    #login{
        float: right;
    }
    #bg{
        display: block;
        position: relative;
        left: 38%;
        top: 10%;
    }
    #top{
        display: block;
    }
    #header{
     display: inline-block;   
    }
    body{
        #height: 100px;
        #width: 100px;
        #display: block;
        margin: auto;
        
        #background: url('<?php echo base_url();?>img/home-icon.png') no-repeat;
    }
</style>