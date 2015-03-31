<div class="container-fluid" id="refill-cont">
    @if(isset($cashing))
        <div class="row">
            <div class="col-xs-3">
                <span class="heading">Дата добавления</span>
            </div>
            <div class="col-xs-3">
                <span class="heading">Сумма</span>
            </div>
            <div class="col-xs-3">
                <span class="heading">Телефон</span>
            </div>
            <div class="col-xs-3">
                <span class="heading">Коментарий</span>
            </div>
        </div>
        @foreach($cashing as $item)
            <div class="row">
                <div class="col-xs-3">
                    <div class="date-time">{{{$item->created_at}}}</div>
                </div>
                <div class="col-xs-3">
                    <span class="summ">{{{$item->summ}}}</span>
                    <span class="type">{{{$item->money_type}}}</span>
                </div>
                <div class="col-xs-3">
                    <div class="phone">
                        <span class="phone-first">{{{$item->phone}}}</span>
                        <span class="phone-second"></span>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="comment">
                        <p>{{{$item->comment}}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>