<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VolProfile;
use App\Question;
use App\Mail\VolunteerProfileEmail;
use App\Mail\QuestionEmail;

use Validator;


class FormsController extends Controller
{
    
    public function volunteer(Request $request) {

        Validator::make( $request->all(), [
    		'full_name' => 'required',
    		'born' => 'required',
    		'phone' => 'required',
    		'email' => 'required',
    		'address' => 'required',
    		'occupation' => 'required',
    		'targets' => 'required',
    		'experience' => 'required',
    		'programs' => 'required',
    		'favours' => 'required',
    		'positions' => 'required',
    	], [
            'full_name.required' => 'ФИО не может быть пустым',
            'born.required' => 'Вы не указали вашу дату рождения',
            'phone.required' => 'Вы не указали ваш контактный телефон',
            'email.required' => 'Вы не указали ваш email',
            'address.required' => 'Вы не указали ваш адрес',
            'occupation.required' => 'Вы не указали, кем вы являетесь (пример: работающий, студент, школьник)',
            'targets.required' => 'Вы не указали,  что именно привлекает вас в волонтерской деятельности',
            'experience.required' => 'Вы не указали ваш опыт',
            'programs.required' => 'Вы не указали интересующие вас программы',
            'favours.required' => 'Вы не указали какую помощь Вы готовы оказать',
            'positions.required' => 'Вы не указали, чем вы хотите заниматься',
        ] )->validate();
        
   
        $profile = new VolProfile();
        $profile->fill($request->except('_token'));
        $profile->save();
 
        \Mail::to(env('EMAIL_ADDRESS_FOR_ANKET'))->send(new VolunteerProfileEmail($profile));

        return redirect()->route('kdl.forms.done', ['message' => 'Спасибо, ваша заявка принята! Мы свяжемся с вами в ближайшее время']);
    }



    public function question(Request $request) {

        Validator::make( $request->all(), [
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'phone' => 'required',
    		'email' => 'required',
    		'message' => 'required',
    	], [
            'first_name.required' => 'Вы не указали имя',
    		'last_name.required' => 'Вы не указали фамилию',
    		'phone.required' => 'Вы не указали телефон',
    		'email.required' => 'Вы не указали email',
    		'message.required' => 'Вы не указали сообщение',
        ] )->validate();
        
   
        $question = new Question();
        $question->fill($request->except('_token'));
        $question->save();
 
        \Mail::to(env('EMAIL_ADDRESS_FOR_QUESTION'))->send(new QuestionEmail($question));

        return redirect()->route('kdl.forms.done', ['message' => 'Спасибо за ваш вопрос! Мы свяжемся с вами в ближайшее время']);
    }


    // 

    public function formDone(Request $request) {
        
        $data = [
            'title' => $request->message
        ];

        return view('layouts.forms.done', $data);
    }

   

}
