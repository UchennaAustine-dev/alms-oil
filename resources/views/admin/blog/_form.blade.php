@php $post = $post ?? null;
$val = fn(string $k) => old($k, $post?->{$k} ?? '');
$chk = fn(string $k) => old($k, $post?->{$k} ?? false) ? 'checked' : '';
$ic  = 'w-full px-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:border-amber-400 focus:bg-white focus:ring-2 focus:ring-amber-100 transition-all';
$lc  = 'text-[11px] font-bold uppercase tracking-wider text-gray-500 block mb-1.5';
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <div class="md:col-span-2">
        <label class="{{ $lc }}">Title *</label>
        <input type="text" name="title" required value="{{ $val('title') }}" placeholder="Post title" class="{{ $ic }}" />
    </div>
    <div>
        <label class="{{ $lc }}">Category *</label>
        <input type="text" name="category" required value="{{ $val('category') }}" placeholder="e.g. Industry News" class="{{ $ic }}" />
    </div>
    <div>
        <label class="{{ $lc }}">Read Time *</label>
        <input type="text" name="read_time" required value="{{ $val('read_time') }}" placeholder="e.g. 5 min read" class="{{ $ic }}" />
    </div>
    <div>
        <label class="{{ $lc }}">Author *</label>
        <input type="text" name="author" required value="{{ $val('author') }}" placeholder="Author name" class="{{ $ic }}" />
    </div>
    <div>
        <label class="{{ $lc }}">Author Role *</label>
        <input type="text" name="author_role" required value="{{ $val('author_role') }}" placeholder="e.g. Senior Analyst" class="{{ $ic }}" />
    </div>
    <div class="md:col-span-2">
        <label class="{{ $lc }}">Excerpt *</label>
        <textarea name="excerpt" rows="3" required placeholder="Short summary displayed on listing pages…" class="{{ $ic }}">{{ $val('excerpt') }}</textarea>
    </div>
    <div class="md:col-span-2">
        <label class="{{ $lc }}">Body (HTML) *</label>
        <textarea name="body" rows="16" required placeholder="<p>Post content here...</p>" class="{{ $ic }} font-mono text-xs">{{ $val('body') }}</textarea>
        <p class="text-xs text-gray-400 mt-1.5">Accepts raw HTML — &lt;p&gt;, &lt;h2&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;strong&gt;, &lt;blockquote&gt;</p>
    </div>
    <div class="flex items-center gap-6">
        <label class="flex items-center gap-2.5 cursor-pointer">
            <input type="checkbox" name="published" value="1" {{ $chk('published') }}
                   class="w-4 h-4 rounded accent-amber-500" />
            <span class="text-sm font-medium text-gray-700">Published</span>
        </label>
        <label class="flex items-center gap-2.5 cursor-pointer">
            <input type="checkbox" name="featured" value="1" {{ $chk('featured') }}
                   class="w-4 h-4 rounded accent-amber-500" />
            <span class="text-sm font-medium text-gray-700">Featured</span>
        </label>
    </div>
</div>
