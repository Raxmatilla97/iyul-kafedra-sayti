
@push('css')
    
    @endpush
    
    @push('scripts')
    <script src="{{ asset('js/slugify.js') }}"></script>
    <script>
        $(document).ready(function(){
          $('#slug-target,#slug-target-span').slugify('#slug-source');
        });
        </script>
    @endpush