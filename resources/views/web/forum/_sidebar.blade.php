<!--
MIT License

Copyright (c) 2022 FoxxoSnoot

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->

@auth
    <div class="col-md-3 {{ ($mobile) ? 'show-sm-only' : 'hide-sm' }}">
        @if ((Auth::user()->isStaff() && $topic->is_staff_only_posting) || !$topic->is_staff_only_posting)
            <a href="{{ route('forum.new', ['thread', $topic->id]) }}" class="btn btn-block btn-success mb-3"><i class="fas fa-plus"></i> Create Thread</a>
        @endif
        <form action="{{ route('forum.search') }}" method="GET">
            <input class="form-control" type="text" name="search" placeholder="Search..." required>
        </form>
        <div class="mb-3"></div>
        <h5>Forum Level</h5>
        <div class="card text-center">
            <div class="card-body">
                <h3>{{ Auth::user()->forum_level }}</h3>
                <div class="text-muted" style="margin-top:-10px;">{{ Auth::user()->forum_exp }}/{{ round(Auth::user()->forumLevelMaxExp()) }} EXP to level up</div>
            </div>
        </div>
    </div>
@endauth
