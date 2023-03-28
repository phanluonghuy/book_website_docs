<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$errors = [];
 		
 		$values = [];
 		$values['email'] = trim($_POST['email']);
 		$query = "select * from users where email = :email limit 1";
 		$row = db_query_one($query,$values);
		
		if(!empty($row))
		{
  			if(password_verify($_POST['password'], $row['password']))
  			{

  				authenticate($row);
				message("login successfull");
				redirect('admin');  				
  			}

		}

		message("wrong email or password"); 
	}

?>

<?php require page('includes/header')?>

	<section class="login-content">
 
		<div class="login-holder">

		<?php if(message()):?>
			<div class="alert"><?=message('',true)?></div>
		<?php endif;?>

			<form method="post" >
				<center><img src="assets/images/user.png" style="width: 100px;border-radius: 50%;border: solid thin #ccc;"></center>
				<p style="font-size: 24pt; margin-bottom: 30px; margin-left: 50px">Sign in to eBook</p>
				<input value="<?=set_value('email')?>"  type="email" name="email" placeholder="Email">
				<input value="<?=set_value('password')?>"  type="password" name="password" placeholder="Password">
				<button>Sign in</button>
			</form>
		</div>

	</section>

<?php require page('includes/footer')?>