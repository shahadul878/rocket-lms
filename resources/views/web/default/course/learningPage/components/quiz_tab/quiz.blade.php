<div class="tab-item p-10 cursor-pointer {{ $class ?? '' }}" data-type="{{ $type }}" data-id="{{ $item->id }}">
    <div class="d-flex align-items-center">
        <span class="chapter-icon bg-gray300 mr-10">
            <i data-feather="award" class="text-gray" width="16" height="16"></i>
        </span>

        <div class="flex-grow-1">
            <span class="font-weight-500 font-14 text-dark-blue d-block">{{ $item->title }}</span>

            <div class="d-flex align-items-center justify-content-between">
                <span class="font-12 text-gray d-block">
                    {{ $item->time .' '. trans('public.min') }}
                    {{ ($item->quizQuestions ? ' | ' . $item->quizQuestions->count() .' '. trans('public.questions') : '') }}
                </span>

                @if(!empty($quiz->result_status))
                    @if($quiz->result_status == 'passed')
                        <span class="font-12 text-primary">{{ trans('quiz.passed') }}</span>
                    @elseif($quiz->result_status == 'failed')
                        <span class="font-12 text-danger">{{ trans('quiz.failed') }}</span>
                    @elseif($quiz->result_status == 'waiting')
                        <span class="font-12 text-warning">{{ trans('quiz.waiting') }}</span>
                    @endif
                @endif
            </div>
        </div>

    </div>
</div>
