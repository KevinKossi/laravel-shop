@extends('layouts.admin')

@section('content')

    <a class="btn btn-primary mb-2" href=""> Create a new FAQ </a>
    @foreach ($FAQS as $FAQ)
        <div class="d-flex flex-row justify-content-between">
            <p> {{ $FAQ->id }} </p>
            <p> {{ $FAQ->question_name }} </p>


            <div class="d-flex flex-row">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="{{ '#' . 'modal' . $FAQ->id }}">
                    Answer
                </button>
                <div class="modal fade" id="{{ 'modal' . $FAQ->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="{{ '#' . 'modal' . $FAQ->question_name }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="{{ $FAQ->question_name }}"> {{ $FAQ->question_name }}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ $FAQ->question_answer }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="" class="btn btn-warning"> Edit </a>
                <form action="" method="POST">
                    @csrf
                    @method('delete')
                    <a onclick="this.closest('form').submit();return false;" class="btn btn-danger"> Delete </a>
                </form>
            </div>
        </div>
    @endforeach
    <div class="mt-3">
        {{ $FAQS->appends(request()->input())->links() }}
    </div>
@endsection
