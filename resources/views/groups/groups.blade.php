@if (count($groups) > 0)
        @foreach ($groups as $group)
                    <div class="pull-left">
                        <ul>
                            {{-- 作成グループ --}}
                            <li class="h3">{!! link_to_route('groups.show', $group->name, ['group' => $group->id]) !!}</li>
                            <p>{!! nl2br(e($group->comment)) !!}</p>
                        </ul>
                    </div>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $groups->links() }}
@endif