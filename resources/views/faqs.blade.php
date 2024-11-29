@extends('base')

@section('content')
<div class="p-6">
    <!-- Accordion Container -->
    <div class="space-y-4">
        <!-- Accordion Item 1 -->
        <div class="border border-gray-300 rounded-lg">
            <button class="w-full text-left p-2 bg-gray-400 rounded-t-lg focus:outline-none" id="accordion-button-1">
                <span class="text-sm font-semibold">Pertanyaan 1</span>
            </button>
            <div id="accordion-content-1" class="hidden p-3 bg-white text-sm">
                <p>Jawaban 1</p>
            </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="border border-gray-300 rounded-lg">
            <button class="w-full text-left p-2 bg-gray-400 rounded-t-lg focus:outline-none" id="accordion-button-2">
                <span class="text-sm font-semibold">Pertanyaan 2</span>
            </button>
            <div id="accordion-content-2" class="hidden p-3 bg-white text-sm">
                <p>Jawaban 2</p>
            </div>
        </div>

        <!-- Accordion Item 3 -->
        <div class="border border-gray-300 rounded-lg">
            <button class="w-full text-left p-2 bg-gray-400 rounded-t-lg focus:outline-none" id="accordion-button-3">
                <span class="text-sm font-semibold">Pertanyaan 3</span>
            </button>
            <div id="accordion-content-3" class="hidden p-3 bg-white text-sm">
                <p>Jawaban 3</p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to toggle accordion sections -->
<script>
    document.getElementById('accordion-button-1').addEventListener('click', function() {
        const content = document.getElementById('accordion-content-1');
        content.classList.toggle('hidden');
    });

    document.getElementById('accordion-button-2').addEventListener('click', function() {
        const content = document.getElementById('accordion-content-2');
        content.classList.toggle('hidden');
    });

    document.getElementById('accordion-button-3').addEventListener('click', function() {
        const content = document.getElementById('accordion-content-3');
        content.classList.toggle('hidden');
    });
</script>
@endsection
