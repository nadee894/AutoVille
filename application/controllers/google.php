<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Google extends CI_Controller {

    function index() {

        $this->load->library('googleplus');
        if (isset($_GET['code'])) {

            $this->googleplus->client->authenticate();

            $_SESSION['token'] = $this->googleplus->client->getAccessToken();

            $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

            header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }
        if ($_SESSION['token']) {

            $this->googleplus->client->setAccessToken($_SESSION['token']);
        }
        if ($this->googleplus->client->getAccessToken()) {

            $this->googleplus->people->get('115414977082318263605');

            $activities =
                    $this->googleplus->activities->listActivities('115414977082318263605', 'public');

            print 'Your Activities: <pre>' . print_r($activities, true) . '</pre>';

// We're not done yet. Remember to update the cached access token.
// Remember to replace $_SESSION with a real database or memcached.

            $_SESSION['token'] = $this->googleplus->client->getAccessToken();
        } else {

            $authUrl = $this->googleplus->client->createAuthUrl();

            print "<a href='$authUrl'>Connect Me!</a>";
        }
    }

}