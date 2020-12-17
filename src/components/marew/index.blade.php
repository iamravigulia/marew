<style>
    table {
        background: #fff;
        width: 100%;
        border: 0;
    }
    th {}
    td {
        border-top: 1px solid #999;
        padding: 5px;
    }
    tr:nth-child(odd) {
        background: #ddd;
    }
</style>
<table>
    <thead>
        <th>#</th>
        <th>Question</th>
        <th>Error</th>
        <th>Answers</th>
        <th>Created at</th>
        <th>Updated at</th>
    </thead>
    <tbody>
        @php
        $marew = DB::table('fmt_marew_ques')->get();
        @endphp
        @foreach ($marew as $que)
        <tr>
            <td>{{$que->id}}</td>
            @php $arr_q = explode (",", $que->question); @endphp
            <td>
                @foreach ($arr_q as $aq)
                    @if ($aq == $que->error)
                    <span style="color:rgb(187, 2, 2); text-decoration:underline;">{{$aq}}</span>
                    @else 
                    {{$aq}}
                    @endif
                @endforeach
            </td>
            <td>{{$que->error}}</td>
            @php $answers = DB::table('fmt_marew_ans')->where('question_id', $que->id)->get() @endphp
            <td>
                <ul>
                    @if($answers)
                    @foreach ($answers as $ans)
                        <li @if($ans->arrange == 1) style="color:blue;" @endif>{{$ans->answer}}</li>
                    @endforeach
                    @endif
                </ul>
            </td>
            <td>{{date('F d, Y',strtotime($que->created_at))}}</td>
            <td>{{date('F d, Y',strtotime($que->updated_at))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
