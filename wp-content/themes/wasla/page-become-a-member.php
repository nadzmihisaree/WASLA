<?php

/**
 * Template Name: draft----------------
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>




<section>
    <br><br>

    <div class="container">

        <ul class="nav nav-pills nav-justified">
            <li role="presentation" class="active"><a href="#home" class="btn btn-default" role="tab" data-toggle="pill">Home</a></li>
            <li role="presentation"><a href="#profile" class="btn btn-default" role="tab" data-toggle="pill">Profile</a></li>
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle btn btn-default" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="pill">Messages</a></li>
                    <li><a href="#settings" aria-controls="settings" role="tab" data-toggle="pill">Settings</a></li>
                </ul>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">home</div>
            <div role="tabpanel" class="tab-pane" id="profile">profile</div>
            <div role="tabpanel" class="tab-pane" id="messages">messages</div>
            <div role="tabpanel" class="tab-pane" id="settings">settings</div>
        </div>

    </div>
</section>