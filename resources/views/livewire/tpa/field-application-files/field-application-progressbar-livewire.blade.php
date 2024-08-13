<div>
    <!-- Progress Bar Container -->
    <div class="relative pt-1 card-box mb-30 p-3">
        <div class="flex items-center justify-between">
            <!-- Progress Label -->
            <span class="
                text-xs font-semibold inline-block py-1 px-2 rounded
                @if($progress < 30)
                    bg-red-500 text-red-100
                @elseif($progress <= 49)
                    bg-yellow-500 text-yellow-100
                @else
                    bg-teal-500 text-teal-100
                @endif
            ">
                Progress
            </span>
            <span class="
                text-xs font-semibold inline-block py-1 px-2 rounded
                @if($progress < 30)
                    bg-red-500 text-red-100
                @elseif($progress <= 49)
                    bg-yellow-500 text-yellow-100
                @else
                    bg-teal-500 text-teal-100
                @endif
            ">
                {{ number_format($progress, 2) }}%
            </span>
        </div>
        <!-- Progress Bar -->
        <div class="flex w-full bg-gray-300 rounded-full mt-2">
            <div
                class="
                    text-xs font-medium text-center p-0.5 leading-none rounded-full
                    @if($progress < 30)
                        bg-red-500 text-red-100
                    @elseif($progress <= 49)
                        bg-yellow-500 text-yellow-100
                    @else
                        bg-teal-500 text-teal-100
                    @endif
                "
                style="width: {{ $progress }}%; transition: width 0.5s ease;">
                &nbsp;
            </div>
        </div>
    </div>
</div>
