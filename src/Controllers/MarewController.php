<?php

namespace edgewizz\marew\Controllers;
use App\Http\Controllers\Controller;
use Edgewizz\Edgecontent\Models\ProblemSetQues;
use Edgewizz\Marew\Models\MarewAns;
use Edgewizz\Marew\Models\MarewQues;
use Illuminate\Http\Request;

class MarewController extends Controller
{
    //
    public function test(){
        dd('hello Marew');
    }
    public function store(Request $request){
        $Q = new MarewQues();
        $Q->question = $request->paragraph;
        $Q->error = $request->error;
        $Q->difficulty_level_id = $request->difficulty_level_id;
        $Q->save();
        /*  */
        if ($request->answer1) {
            $ans_1 = new MarewAns();
            $ans_1->question_id = $Q->id;
            $ans_1->answer = $request->answer1;
            if ($request->ans_correct1) {
                $ans_1->arrange = 1;
            }
            $ans_1->save();
        }
        /*  */
        /*  */
        if ($request->answer2) {
            $ans_2 = new MarewAns();
            $ans_2->question_id = $Q->id;
            $ans_2->answer = $request->answer2;
            if ($request->ans_correct2) {
                $ans_2->arrange = 1;
            }
            $ans_2->save();
        }
        /*  */
        /*  */
        if ($request->answer3) {
            $ans_3 = new MarewAns();
            $ans_3->question_id = $Q->id;
            $ans_3->answer = $request->answer3;
            if ($request->ans_correct3) {
                $ans_3->arrange = 1;
            }
            $ans_3->save();
        }
        /*  */
        /*  */
        if ($request->answer4) {
            $ans_4 = new MarewAns();
            $ans_4->question_id = $Q->id;
            $ans_4->answer = $request->answer4;
            if ($request->ans_correct4) {
                $ans_4->arrange = 1;
            }
            $ans_4->save();
        }
        /*  */
        /*  */
        if ($request->answer5) {
            $ans_5 = new MarewAns();
            $ans_5->question_id = $Q->id;
            $ans_5->answer = $request->answer5;
            if ($request->ans_correct5) {
                $ans_5->arrange = 1;
            }
            $ans_5->save();
        }
        /*  */
        /*  */
        if ($request->answer6) {
            $ans_6 = new MarewAns();
            $ans_6->question_id = $Q->id;
            $ans_6->answer = $request->answer6;
            if ($request->ans_correct6) {
                $ans_6->arrange = 1;
            }
            $ans_6->save();
        }
        /*  */
        if($request->problem_set_id && $request->format_type_id){
            $pbq = new ProblemSetQues();
            $pbq->problem_set_id = $request->problem_set_id;
            $pbq->question_id = $Q->id;
            $pbq->format_type_id = $request->format_type_id;
            $pbq->save();
        }
        return back();
    }
    public function edit($id, Request $request){
        
    }
}
