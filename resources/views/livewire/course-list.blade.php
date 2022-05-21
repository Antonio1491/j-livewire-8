<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($curses as $curse)
    <!---->
        <x-course-card :curse="$curse"/>
    @endforeach
</div>
