@if($recordCount = $this->records->count())
    <div class="row mx-auto px-3 mt-1 mb-3">
        @foreach (['quality', 'service', 'delivery'] as $ratingType)
            <div class="col-md-4{{ $loop->first ? ' pl-md-0' : '' }}{{$loop->last ? ' pr-md-0' : ''}}">
                <div class="card bg-light shadow-sm">
                    <div class="card-body">
                        <h5 class="text-muted">@lang('igniter.local::default.reviews.label_'.$ratingType)</h5>
                        <div
                            class="chart-container pt-3"
                            data-control="review-chart"
                            data-data='@json($this->getController()->makeAverageRatingDataset($ratingType, $this->records))'
                        >
                            <div class="chart-canvas">
                                <canvas
                                    style="width: 100%; height: 128px"
                                ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
