<?php
namespace ezWrk\Controllers;

class HomeController extends Controller {
    public function index () {
        $options = array(
            'options' => array(
                'title' => 'Home'
            )
        );
        $this->render("index.view.html", $options, "html");
    }
}
