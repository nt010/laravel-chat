<div class="media">
    <div class="media-body comment-body">
        <div class="row">
            <span class="comment-body-user">{{$item->name}}</span>
            <span class="comment-body-time">{{$item->created_at}}</span>
        </div>
        <!-- e()でエスケープ→nl2brで改行をbrタグに変換→タグがエスケープされないように{!! !!}で囲む -->
        <span class="comment-body-content">{!! nl2br(e($item->comment)) !!}</span>
    </div>
</div>
