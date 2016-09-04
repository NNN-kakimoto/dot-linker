@inject('eventservice','App\Services\EventService')

<div class="event">
    <div class="left">
        <div class="year">
            {{ $eventservice->dateYear($event->start_date) }}
        </div>
        <div class="day">
            {{ $eventservice->dateDay($event->start_date) }}
        </div>
        <div class="time">
            {{ $eventservice->dateTime($event->start_time) }}~{{ $eventservice->datetime($event->end_time) }}
        </div>
        <div class="place">
            {{ $event->place }}
        </div>
        <div class="field {{ $event->field }}">
            {{ $eventservice->field($event->field) }}
        </div>
    </div>
    <div class="right">
        <div class="top">
            <div class="condition finished">
                {{ $eventservice->condition($event->start_date,$event->start_time,$event->end_date,$event->end_time) }}
            </div>
        </div>
        <div class="center">
            <div class="title">
                {{ $event->name }}
            </div>
        </div>
        <div class="bottom">
          <div class="tags">
            @foreach($event->tags as $tag)
                <div class="tag">
                  <i class="fa fa-tag" aria-hidden="true"></i><a href="#">{{ $tag }}</a><i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
            @endforeach
          </div>
        </div>
    </div>
    </div>
