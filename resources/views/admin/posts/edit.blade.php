@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-900">Edit Post</h1>
            <div class="flex items-center gap-3">
                <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                    class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center bg-blue-50 px-3 py-2 rounded-lg transition-colors">
                    View Live <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
                <a href="{{ route('admin.posts.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to All Posts
                </a>
            </div>
        </div>

        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            @csrf
            @method('PUT')

            {{-- Main Content Column --}}
            <div class="lg:col-span-9 space-y-6">
                {{-- Title Input --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" id="title"
                        class="block w-full text-2xl font-bold border-0 border-b-2 border-gray-200 focus:border-blue-600 focus:ring-0 rounded-none px-0 bg-transparent placeholder-gray-300 transition-all"
                        value="{{ old('title', $post->title) }}" placeholder="Enter title here">
                    @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

                    {{-- Permalink Preview --}}
                    <div class="mt-3 text-sm text-gray-500 flex items-center gap-1">
                        <span class="font-medium">Permalink:</span>
                        <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                            class="text-blue-600 underline decoration-blue-600/30">{{ route('blog.show', $post->slug) }}</a>
                    </div>
                </div>

                {{-- Content Editor --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <div
                        class="p-2 bg-gray-50 border-b border-gray-200 rounded-t-lg flex justify-between items-center px-4">
                        <span class="text-sm font-medium text-gray-700">Post Content</span>
                    </div>
                    <div>
                        <textarea name="content" id="content" rows="20"
                            class="block w-full border-0 rounded-b-lg focus:ring-0 sm:text-sm"
                            placeholder="Start writing or type / to choose a block">{{ old('content', $post->content) }}</textarea>
                    </div>
                    @error('content') <div class="px-6 pb-4 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                {{-- Excerpt (Optional) --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Excerpt</h3>
                        <span class="text-xs text-gray-500">Optional</span>
                    </div>
                    <textarea name="excerpt" id="excerpt" rows="3"
                        class="shadow-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 hover:border-blue-300 outline-none block w-full sm:text-sm border-gray-200 rounded-md"
                        placeholder="Write a short summary (optional)">{{ old('excerpt', $post->excerpt) }}</textarea>
                    <p class="mt-2 text-sm text-gray-500">Excerpts are optional hand-crafted summaries of your content that
                        can be used in your theme.</p>
                </div>

                {{-- SEO Settings --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">SEO Settings</h3>
                    <div class="space-y-4">
                        <div>
                            <label for="seo_title" class="block text-sm font-medium text-gray-700">SEO Title</label>
                            <input type="text" name="seo_title" id="seo_title"
                                class="mt-1 shadow-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 hover:border-blue-300 outline-none block w-full sm:text-sm border-gray-200 rounded-md"
                                value="{{ old('seo_title', $post->seo_title) }}">
                            <p class="mt-1 text-xs text-gray-500">Leave empty to use the post title.</p>
                        </div>
                        <div>
                            <label for="seo_description" class="block text-sm font-medium text-gray-700">Meta
                                Description</label>
                            <textarea name="seo_description" id="seo_description" rows="3"
                                class="mt-1 shadow-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 hover:border-blue-300 outline-none block w-full sm:text-sm border-gray-200 rounded-md">{{ old('seo_description', $post->seo_description) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar Column --}}
            <div class="lg:col-span-3 space-y-6">
                {{-- Publish Box --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="text-sm font-medium text-gray-900">Publish</h3>
                    </div>
                    <div class="p-4 space-y-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <span class="mr-2">Status:</span>
                            <span
                                class="font-bold {{ $post->status === 'published' ? 'text-green-600' : 'text-gray-600' }}">{{ ucfirst($post->status) }}</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <span class="mr-2">Created:</span>
                            <span class="font-bold">{{ $post->created_at->format('M j, Y') }}</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <span class="mr-2">Last Updated:</span>
                            <span class="font-bold">{{ $post->updated_at->format('M j, Y') }}</span>
                        </div>

                        <hr class="border-gray-100">

                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select name="status" id="status"
                                class="block w-full pl-3 pr-10 py-2 text-base border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 hover:border-blue-300 sm:text-sm rounded-md">
                                <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft
                                </option>
                                <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>
                                    Published</option>
                            </select>
                        </div>

                        <div>
                            <label for="published_at" class="block text-sm font-medium text-gray-700 mb-1">Publish
                                Date</label>
                            <input type="datetime-local" name="published_at" id="published_at"
                                class="shadow-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 hover:border-blue-300 outline-none block w-full sm:text-sm border-gray-200 rounded-md"
                                value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}">
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 border-t border-gray-200 flex justify-between items-center">
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this post?');" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-sm text-red-600 hover:text-red-800 font-medium bg-transparent border-none p-0 cursor-pointer">Move
                                to Trash</button>
                        </form>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update
                        </button>
                    </div>
                </div>

                {{-- Featured Image Box --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <h3 class="text-sm font-medium text-gray-900">Featured Image</h3>
                    </div>
                    <div class="p-4">
                        <div id="image-preview" class="mb-4 {{ $post->featured_image ? '' : 'hidden' }}">
                            <img src="{{ $post->featured_image }}" alt="Preview"
                                class="w-full h-auto rounded-md border border-gray-200">
                            <button type="button" onclick="removeImage()"
                                class="mt-2 text-xs text-red-600 hover:text-red-800 font-medium">Remove Image</button>
                        </div>

                        <div class="flex items-center justify-center w-full {{ $post->featured_image ? 'hidden' : '' }}"
                            id="upload-placeholder">
                            <label for="featured_image"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="text-sm text-gray-500"><span class="font-semibold">Click to upload</span></p>
                                </div>
                                <input id="featured_image" name="featured_image" type="file" class="hidden" accept="image/*"
                                    onchange="previewImage(this)" />
                            </label>
                        </div>
                        @error('featured_image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- TinyMCE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image table',
            skin: 'oxide',
            content_css: 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });

        // Image Preview Script
        function previewImage(input) {
            const preview = document.getElementById('image-preview');
            const placeholder = document.getElementById('upload-placeholder');
            const img = preview.querySelector('img');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    img.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        }

        function removeImage() {
            const input = document.getElementById('featured_image');
            const preview = document.getElementById('image-preview');
            const placeholder = document.getElementById('upload-placeholder');

            input.value = '';
            preview.classList.add('hidden');
            placeholder.classList.remove('hidden');

            // Note: This only clears the input and preview. 
            // To actually delete the image on the server, we'd need a separate mechanism or just uploading a new one.
            // For now, this UX implies "resetting the upload" or "clearing current preview".
        }
    </script>
@endsection