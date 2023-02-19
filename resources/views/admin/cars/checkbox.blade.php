
<div class="flex items-center mr-2">
    <label class="text-sm font-medium text-gray-900 dark:text-gray-300 mr-1">{{ $labelText  }}</label>
    <input type="checkbox" name="{{ $parts.'[]' }}" value="{{ $value }}" 
        @if($car['car_checklist'] !== null && in_array($value,json_decode($car['car_checklist'][$parts])))
            checked
        @endif
     class="w-4 h-4 text-accent-regular bg-gray-100 border-gray-300 rounded focus:ring-red-500  focus:ring-0 ">
</div>