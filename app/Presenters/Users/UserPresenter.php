<?php

namespace App\Presenters\Users;

use App\Presenters\Presenter;
use Illuminate\Support\HtmlString;

class UserPresenter extends Presenter {

    public function getId()
    {
        return $this->model->id;
    }

    public function link()
    {
        return new HtmlString("<a href=" . route('user.show', $this->model->id) . ">" . $this->model->name ."</a>");
    }

    public function email()
    {
        return $this->model->email;
    }

    public function name()
    {
        return $this->model->name;
    }
}