<?php
    class HomeController extends Controller {

        public function __construct () {

        }

        public function index () {
            $options = array(
                'options' => array(
                    'title' => 'Home'
                )
            );
            $this->render("index.view.html", $options, "html");
        }

    }