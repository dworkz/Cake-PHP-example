<?php

# /app/controllers/users_controller.php

class UsersController extends AppController {

    function view() {
        $user = $this->User->find('first');

        $this->set('user', $user);

        $text = $this->params['url']['text'];
        $this->set('text', $text);
    }

}