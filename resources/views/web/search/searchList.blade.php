<table class="table table-striped table-responsive">
    <thead style="">
        <tr style="border-bottom:solid #32a2a8">
            <th style="border:none !important">
                <h4><i class="fas fa-award" style="color:#32a2a8"></i> Course & Seminar List</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($filterd as $round)
        <tr>
            <td style="width:25%;">
                <div class="">
                    <img class="img-fluid" src="{{ asset('uploads/courses')}}/{{ $round->course->course_image_thumbnail }}" alt="" style="border-radius:.5rem;padding-top:10px;height:120px;width:200px">
                </div>
            </td>
            <td style="width:60%;">
                <div class="detials">
                    <a href="{{ url('courseDetails/'.$round->course->id) }}">
                        <h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
                    </a>
                    <p style="margin-bottom:0px">
                        {{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

                    </p>
                </div>

                <a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
            </td>
            <td style="width:15%;">
                <div class="detials" style="padding:0px">
                    <ul>
                        <li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
                        <li><i class="fas fa-clock" style="color:#32a2a8"></i>
                            {{ $round->course->course_duration }}-Days
                        </li>
                        <li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
                        <li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
                            <?php $date = date_create($round->round_start_date) ?>
                            {{ date_format($date,"d-m-Y") }}

                        </li>
                    </ul>
                </div>
            </td>
            <td>
                <a href="{{url ('/registerCourse/'.$round->course->id) }}" class="btn btn-dark">Register</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<div class="clearfix"></div>
<div id="category" class="blog-pagination justify-content-center">

    {!! $filterd->links() !!}

</div>