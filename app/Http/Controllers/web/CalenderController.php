<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Year_calendar;
use App\Models\Country;
use App\Models\Course;
use App\Models\Round;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Venue;
use Carbon\Carbon;
use DB;
class CalenderController extends Controller
{
 public function getCal($current)
    {


        $month = 1;
        $years = $current;
        $filterd_rounds = array();
        $subCategory_rounds = array();
        $round_months = array();


        $now_date = now();

        $yearnew = date('Y');

        $dateended = Carbon::create($yearnew, 1, 31, 0, 0, 0); // 2016-12-31 00:00:00

        $datestarted = Carbon::create($yearnew, 1, 1, 0, 0, 0); // 2016-01-01 00:00:00

        $rounds = Round::whereHas('course', function ($query) {
            $query->where('courses.active', 1);
        })->where('round_start_date', '>=', $datestarted)->where('round_start_date', '<=', $dateended)->get();



        foreach ($rounds as $round) {
            if (($round->round_start_date >= Carbon::parse($now_date)) && $round->active == 1) {
                $month = date("F", strtotime($round->round_start_date));
                $round['month'] = $month;
                array_push($subCategory_rounds, $round);
                array_push($round_months, $month);

                //sasa
                $year = date("Y", strtotime($round->round_start_date));
                $year = $current;
            }
        }

        //end
        usort($subCategory_rounds, function ($round1, $round2) {
            if (strtotime($round1->round_start_date) > strtotime($round2->round_start_date))
                return 1;
            else if (strtotime(($round1->round_start_date) < strtotime($round2->round_start_date)))
                return -1;
            else
                return 0;
        });

        $round_months = array_unique($round_months);

        foreach ($round_months as $round_month) {
            $obj = new Collection();
            $obj->month = $round_month;
            $obj->year = $year;
            $obj->rounds = array();
            foreach ($subCategory_rounds as $round) {

                if ($round->month === $round_month) {
                    if ($round->round_start_date >= Carbon::parse($now_date)) {
                        array_push($obj->rounds, $round);
                    }
                }
            }
            array_push($filterd_rounds, $obj);
        }
        // return count($subCategory_rounds);
        $now = Carbon::now();
        $yearCal = $now->year;
        $calender = Year_calendar::where('id', '=', 1)->firstOrFail();
        $monthRequest = 0;
        return \View::make('web.calender.index', compact('monthRequest', 'yearCal', 'calender', 'month', 'years', 'filterd_rounds'))->render();
        //    return view('web.calender.index', compact('yearCal','calender', 'month', 'years', 'filterd_rounds'));

    }
    public function dynamicCalender(Request $request)
    {

        $month = 1;
        $years = $request->input('currentYear');
        $monthRequest = $request->input('month');
        $filterd_rounds = array();
        $subCategory_rounds = array();
        $round_months = array();


        $now_date = now();

        $yearnew = date('Y');

        $dateended = Carbon::create($yearnew, $monthRequest, 30, 0, 0, 0); // 2016-12-31 00:00:00

        $datestarted = Carbon::create($yearnew, $monthRequest, 1, 0, 0, 0); // 2016-01-01 00:00:00
        \Log::info($dateended);
        $rounds = Round::whereHas('course', function ($query) {
            $query->where('courses.active', 1);
        })->where('round_start_date', '>=', $datestarted)->where('round_start_date', '<=', $dateended)->get();

        \Log::info($rounds);

        foreach ($rounds as $round) {
            if (($round->round_start_date >= Carbon::parse($now_date)) && $round->active == 1) {
                $month = date("F", strtotime($round->round_start_date));
                $round['month'] = $month;
                array_push($subCategory_rounds, $round);
                array_push($round_months, $month);

                //sasa
                $year = date("Y", strtotime($round->round_start_date));
                $year = $years;
            }
        }

        //end
        usort($subCategory_rounds, function ($round1, $round2) {
            if (strtotime($round1->round_start_date) > strtotime($round2->round_start_date))
                return 1;
            else if (strtotime(($round1->round_start_date) < strtotime($round2->round_start_date)))
                return -1;
            else
                return 0;
        });

        $round_months = array_unique($round_months);

        foreach ($round_months as $round_month) {
            $obj = new Collection();
            $obj->month = $round_month;
            $obj->year = $years;
            $obj->rounds = array();
            foreach ($subCategory_rounds as $round) {

                if ($round->month === $round_month) {
                    if ($round->round_start_date >= Carbon::parse($now_date)) {
                        array_push($obj->rounds, $round);
                    }
                }
            }
            array_push($filterd_rounds, $obj);
        }
        \Log::info(['filterd_rounds', $filterd_rounds]);
        // return count($subCategory_rounds);
        $now = Carbon::now();
        $yearCal = $now->year;
        $calender = Year_calendar::where('id', '=', 1)->firstOrFail();


        return view('web.calender.indexAjax', compact('monthRequest', 'yearCal', 'calender', 'month', 'years', 'filterd_rounds'))->render();
    }
    public function old($current){


        $month=1;
        $years=$current;
        $filterd_rounds = array();
        $subCategory_rounds = array();
        $round_months = array();

        $year="";
        $now_date = now();
        $courses = Course::with('rounds')->where('courses.active', '=', 1)->get();
                /*  foreach ($courses as $course) {
                  foreach ($course->rounds as $round) {
                        if ($round->round_start_date > $now_date && $round->active == 1) {
                            $month = date("F", strtotime($round->round_start_date));
                            $round['month'] = $month;
                            array_push($subCategory_rounds, $round);
                            array_push($round_months, $month);

                            //sasa
                            $year=date("Y", strtotime($round->round_start_date));
                            $year= $current;
                        }
                    }
                }*/

					  //new
         //new
		   $year = date('Y');
		$dateended = Carbon::create($year, 12, 31, 0, 0, 0); // 2016-12-31 00:00:00

$datestarted = Carbon::create($year, 1, 1, 0, 0, 0); // 2016-01-01 00:00:00

        $rounds = Round::whereHas('course', function ($query) {
            $query->where('courses.active', 1);
        })->where('round_start_date','>=',$datestarted) ->where('round_start_date','<=',$dateended)->get();

        foreach ($rounds as $round) {
            if (($round->round_start_date >= Carbon::parse($now_date)) && $round->active == 1) {
                $month = date("F", strtotime($round->round_start_date));
                $round['month'] = $month;
                array_push($subCategory_rounds, $round);
                array_push($round_months, $month);

                //sasa
                $year = date("Y", strtotime($round->round_start_date));
                $year = $current;
            }
        }

        //end


                usort($subCategory_rounds, function ($round1, $round2) {
                    if (strtotime($round1->round_start_date) > strtotime($round2->round_start_date))
                        return 1;
                    else if (strtotime(($round1->round_start_date) < strtotime($round2->round_start_date)))
                        return -1;
                    else
                        return 0;
                });

                $round_months = array_unique($round_months);

                foreach ($round_months as $round_month) {
                    $obj = new Collection();
                    $obj->month = $round_month;
                    $obj->year = $year;
                    $obj->rounds = array();

                          foreach ($subCategory_rounds as $round) {

                if ($round->month === $round_month) {
                   if ($round->round_start_date >= Carbon::parse($now_date)) {
                        array_push($obj->rounds, $round);
                    }

							   }
            }
            array_push($filterd_rounds, $obj);
        }
        //return count($subCategory_rounds);
               $now = Carbon::now();
                $yearCal = $now->year;
                $calender =Year_calendar::where('id', '=',1)->firstOrFail();
               return view('web.calender.index', compact('yearCal','calender', 'month', 'years', 'filterd_rounds'));
    }

    public function getCalNext($current){


        $month=1;
        $years=$current;
        $filterd_rounds = array();
        $subCategory_rounds = array();
        $round_months = array();

        $year="";
        $now_date = now();
        $month = 3;
        $date_1 = Carbon::create($current, $month)->startOfMonth()->format('Y-m-d'); //returns 2020-03-01
        $date_2 = Carbon::create($current, $month)->lastOfMonth()->format('Y-m-d'); //returns 2020-03-31
        $courses = Course::with('rounds')
        ->where('rounds.round_start_date', '>=', $date_1)->where('rounds.round_start_date', '<=', $date_2)
        ->where('courses.active', '=', 1)->get();
                foreach ($courses as $course) {
                    foreach ($course->rounds as $round) {
                        if ($round->round_start_date > $now_date && $round->active == 1) {
                            $month = date("F", strtotime($round->round_start_date));
                            $round['month'] = $month;
                            array_push($subCategory_rounds, $round);
                            array_push($round_months, $month);

                            //sasa
                            $year=date("Y", strtotime($round->round_start_date));
                            $year= $current;
                        }
                    }
                }


                usort($subCategory_rounds, function ($round1, $round2) {
                    if (strtotime($round1->round_start_date) > strtotime($round2->round_start_date))
                        return 1;
                    else if (strtotime(($round1->round_start_date) < strtotime($round2->round_start_date)))
                        return -1;
                    else
                        return 0;
                });

                $round_months = array_unique($round_months);

                foreach ($round_months as $round_month) {
                    $obj = new Collection();
                    $obj->month = $round_month;
                    $obj->year = $year;
                    $obj->rounds = array();
                    foreach ($subCategory_rounds as $round) {
                        if ($round->month === $round_month) {
                            array_push($obj->rounds, $round);
                        }
                    }
                    array_push($filterd_rounds, $obj);
                }
                $now = Carbon::now();
                $yearCal = $now->year;
                $calender =Year_calendar::where('id', '=',1)->firstOrFail();
 return view('web.calender.next', compact('yearCal','calender', 'month', 'years', 'filterd_rounds'));
    }
}
