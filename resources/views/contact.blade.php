@extends('layouts.app')

@section('content')
    <div class="bg-brand-black min-h-screen py-24">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-heading font-black text-white uppercase tracking-tighter mb-4">Contact Us</h1>
                <p class="text-gray-400">Have questions? We'd love to hear from you.</p>
            </div>

            <div class="bg-[#111] border border-white/10 rounded-2xl p-8 shadow-2xl">
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="w-full bg-black border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-lime focus:ring-1 focus:ring-brand-lime transition-colors">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full bg-black border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-lime focus:ring-1 focus:ring-brand-lime transition-colors">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                        <textarea name="message" id="message" rows="5"
                            class="w-full bg-black border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-lime focus:ring-1 focus:ring-brand-lime transition-colors"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-brand-lime text-black font-bold rounded-full px-6 py-4 hover:bg-white transition-colors">
                        Send Message
                    </button>
                    <p class="text-center text-xs text-gray-500 mt-4">
                        Or email us directly at <a href="mailto:help@graphicguru.com"
                            class="text-brand-lime hover:underline">help@graphicguru.com</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection