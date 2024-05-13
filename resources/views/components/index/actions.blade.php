<Link href="{{ $edit }}" modal>
<div class="flex items-center p-3 border-b border-blue-gray-100 hover:bg-gray-100 rounded-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 16 15" fill="none">
        <path
            d="M9.11851 2.00239L2.2754 8.8455C2.01488 9.10602 1.75435 9.61839 1.70225 9.99181L1.32883 12.6057C1.18988 13.5523 1.85856 14.2123 2.80513 14.082L5.41906 13.7086C5.7838 13.6565 6.29616 13.396 6.56537 13.1355L13.4085 6.29236C14.5895 5.11132 15.1453 3.73922 13.4085 2.00239C11.6716 0.265562 10.2996 0.821348 9.11851 2.00239V2.00239Z"
            stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path
            d="M8.13721 2.98438C8.42517 4.0069 8.97086 4.93836 9.72202 5.68953C10.4732 6.44069 11.4046 6.98639 12.4272 7.27434"
            stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    {{-- <span>Edit</span> --}}
</div>
</Link>

<Link href="{{ $delete }}" method="DELETE" confirm="Do you want to delete this record?" >
<div class="flex items-center p-3 border-b border-blue-gray-100 hover:bg-gray-100 rounded-full">
    <svg viewBox="0 0 31 31" class="w-4 h-4 mr-1" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="30" height="30" transform="translate(0.5 0.5)" fill="transparent" />
        <path
            d="M1.83594 5.71973C1.83594 2.74148 3.18846 2.5 4.86888 2.5H26.1268C27.8072 2.5 29.1597 2.74148 29.1597 5.71973C29.1597 9.18093 27.8072 8.93945 26.1268 8.93945H4.86888C3.18846 8.93945 1.83594 9.18093 1.83594 5.71973Z"
            stroke="currentColor" stroke-width="1.5" />
        <path
            d="M3.89062 9.17969L5.81695 23.0889C6.25413 26.212 7.3061 28.498 11.2134 28.498H19.4515C23.7004 28.498 24.3288 26.3086 24.8207 23.2821L27.1159 9.17969"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
    </svg>
    {{-- <span>Delete</span> --}}
</div>
</Link>
