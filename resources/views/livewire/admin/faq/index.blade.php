<div class="container">
    <div class="d-flex flex-row justify-content-between w-100">
        <div>
            <h4> Categories </h4>
            <ul class="list-group ">
                <li class="list-group-item"> <a href="{{ url('admin/faqcat') }}">
                        All Categories </a> </li>
                @foreach ($categories as $category)
                    <li class="list-group-item"> <a href="{{ url('admin/faqcat') }}">
                            {{ $category->category_name }} </a> </li>
                @endforeach
            </ul>
        </div>
        <div class="d-flex flex-column" id="content">
            <h4> Frequently asked questions and answers </h4>
            @foreach ($questions as $question)
                <div class="accordion" id={{ 'accordion' . $question->id }}>
                    <div class="card ">
                        <div class="card-header" id="{{ $question->id }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse"
                                    data-target="{{ '#collapse' . $question->id }}" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    {{ $question->question_name }} <i class="fas fa-arrow-circle-down"></i>
                                </button>
                            </h5>
                        </div>

                        <div id="{{ 'collapse' . $question->id }}" class="collapse"
                            aria-labelledby="{{ $question->id }}" data-parent="{{ '#accordion' . $question->id }}">
                            <div class="card-body">
                                {{ $question->question_answer }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-5">
                {{ $questions->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
</div>