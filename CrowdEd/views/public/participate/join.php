<?php head() ?>
<form id="crowded-create-profile-form" action="/participate/join" method="post" accept-charset="utf-8">
<?php if(!isset($user)) {
        $user = new User;
        $user->setArray($_POST);
      } ?>

<?php // echo flash(); ?>
    <div class="sixteen columns">
        <div class="eight columns alpha">
            <h1>Participate!</h1>
            <h2>Create your user profile</h2>
            <h3><em>Help us curate the Martha Berry Digital Archive</em></h3>
            <p>Here are some other statements related to getting people to do something helpful -- like creating a user profile.</p>
        </div>
        <div class="eight columns omega">
        <fieldset>
        <div class="field">
            <?php echo label('username','Choose a username'); ?>
            <div class="inputs">
            <?php echo text(array('name'=>'username', 'class'=>'textinput', 'size'=>'30','id'=>'username'),$user->username); ?>
            </div>
            <?php echo form_error('username'); ?>
        </div>
        <div class="field">
            <?php echo label('first_name','First Name'); ?>

            <div class="inputs">    
                <?php 
                    $firstNameValue = ((!empty($user->first_name)) ? $user->first_name : $_POST['first_name']);
                    echo text(array('name'=>'first_name', 'size'=>'30', 'class'=>'textinput', 'id'=>'first_name'), $firstNameValue); 
                ?>
            </div>

            <?php echo form_error('first_name'); ?>
        </div>
        <div class="field">
            <?php echo label('last_name','Last Name'); ?>
            <div class="inputs">
                <?php 
                    $lastNameValue = ((!empty($user->last_name)) ? $user->last_name : $_POST['last_name']);
                    echo text(array('name'=>'last_name', 'size'=>'30', 'class'=>'textinput', 'id'=>'last_name'), $lastNameValue); 
                ?>
            </div>
            <?php echo form_error('last_name'); ?>
        </div>
        <div class="field">
            <?php echo label('email','Email'); ?>
            <div class="inputs">
            <?php 
                $emailValue = ((!empty($user->email)) ? $user->email : $_POST['email']);
                echo text(array('name'=>'email', 'class'=>'textinput', 'size'=>'30', 'id'=>'email'), $emailValue); 
            ?>
            </div>
            <?php echo form_error('email'); ?>
        </div>
        <input type="submit" class="submit" value="Join!" />
    </div>
    </fieldset>
</form>
<?php foot() ?>