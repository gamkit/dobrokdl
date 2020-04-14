<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Founder;
use App\Trustee;

class AboutController extends Controller
{
    public function index() {
        return view('about.index');
    }

    // 

    public function team() {
        $title = "Наша команда";
        $members = Member::all();

        $data = [
            'title' => $title,
            'members' => $members,
        ];

        return view('about.team', $data);
    }

    public function teamMember($id) {
        $title = "Сотрудник";
        $entity = Member::findOrFail($id);

        $data = [
            'title' => $title,
            'entity' => $entity,
        ];

        return view('about.show', $data);
    }

    // 

    public function founders() {
        $title = "Правление";
        $founders = Founder::all();

        $data = [
            'title' => $title,
            'founders' => $founders,
        ];

        return view('about.founders', $data);
    }

    public function founderMember($id) {
        $title = "Правление";
        $entity = Founder::findOrFail($id);

        $data = [
            'title' => $title,
            'entity' => $entity,
        ];

        return view('about.show', $data);
    }

    // 

    public function trustees() {
        $title = "Попечители фонда";
        $trustees = Trustee::all();

        $data = [
            'title' => $title,
            'trustees' => $trustees,
        ];

        return view('about.trustees', $data);
    }

    public function trusteeMember($id) {
        $title = "Попечитель";
        $entity = Trustee::findOrFail($id);

        $data = [
            'title' => $title,
            'entity' => $entity,
        ];

        return view('about.show', $data);
    }
}
