@extends('user-center.layout')
@section('title', '收到的评论')
@section('user-center-content')

        <h2 class="center">收到的评论</h2>

        <span class="star-badge"></span>
        @if ($newCommentNumber >= 1)
    <a class="setRead" href="javascript: setAllRead('comment')" data-toggle="hover" data-placement="bottom" title="全部已读">
        <i class="material-icons">done_all</i></a>
    @endif

        <ul class="collection messageList" id="commentMeList">

        </ul>

        <script src="/js/user-center/loadMore.js"></script>
        <script src="/js/user-center/message.js"></script>
    <script>$(document).ready(loadMore("commentMe", 1));</script>
    <script src="/js/user-center/commentOperate.js"></script>

@stop