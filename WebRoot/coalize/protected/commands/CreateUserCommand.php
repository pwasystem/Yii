<?php
Yii::import('application.models.User');
class CreateUserCommand extends CConsoleCommand
{
    public function run($args)
    {
        if (count($args) != 3) {
            echo "Usage: php yiic.php createuser <username> <password> <email>\n";
            return;
        }

        $username = $args[0];
        $password = $args[1];
        $email = $args[2];

        // Crie um novo modelo de usuário
        $user = new User();
        $user->username = $args[0];
        $user->password = $args[1];
		$user->email = $args[2];		

        // Salve o usuário no banco de dados
        if ($user->save()) {
            echo "User created successfully.\n";
        } else {
			print_r( $user->getErrors());
            echo "Failed to create user. Errors: " . implode(', ', $user->getErrors()) . "\n";
        }
    }
}
/*

./yiic createuser username password mail@mail.com

*/