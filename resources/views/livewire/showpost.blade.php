<div>
<script>
    Livewire.onPageExpired((response, message) => {})
</script>
<style>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</style>
    <ul>
        @foreach ($reg as $regs)
            <li>
               <a href="#">{{$regs->nombre}}</a> 
            </li>
        @endforeach
    </ul>
    {{ $reg->links() }}

    <div class="bg-blue-600">

    </div>
</div>