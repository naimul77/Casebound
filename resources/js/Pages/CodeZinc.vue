<template>
    <app-layout>
        <template #header>
            <div class = "p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class = "bg-white bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class = "flex items-center">
                        <!-- Trending Up Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <div class = "ml-4 text-3xl text-gray-700 leading-7">
                            CodeZinc Environment.
                        </div>
                    </div>
                </div>
                <div class = "mt-8 text-lg">
                    Welcome to the Metrics Generator
                </div>
                <div class = "mt-6 text-gray-500">
                    We provide you a summary of the latest updates on all you projects based on key performance indicators. 
                    <br>
                    Important deadlines and milestones are indicated through the customizable news ticker at the bottom of the page. 
                    <br>
                    You can view your company's current measures on productivity, source code complexity, test efficiency, effectiveness, and various metrics. 
                    <br>
                </div>
            </div>
            <div class = "bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                <div class = "p-6 border-b">
                    <div class = "flex items-center">
                        <!-- Source Code Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <div class = "ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Source Code Complexity
                        </div>
                    </div>
                    <div class = "ml-12">
                        <div class = "mt-2 text-sm text-gray-500">
                            Calculates the average maintainability index of the various software components based on multiple factors such as lines of code, function points, Halsteadts & Mccabe's Metrics.
                        </div>
                        <a href="https://laravel.com/docs">
                            <div class = "mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Generate Graph</div>
                                <div class = "ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path 
                                            fill-rule="evenodd" 
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" 
                                            clip-rule="evenodd"
                                        >
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class = "p-6 border-b border-l">
                    <div class = "flex items-center">
                        <!-- Source Code Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <div class = "ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Work Productivity 
                        </div>
                    </div>
                    <div class = "ml-12">
                        <div class = "mt-2 text-sm text-gray-500">
                            Calculates workflow efficiency and effectiveness through key performance indicators such as function points per hour. 
                        </div>
                        <a href="https://laravel.com/docs">
                            <div class = "mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Generate Graph</div>
                                <div class = "ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path 
                                            fill-rule="evenodd" 
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" 
                                            clip-rule="evenodd"
                                        >
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-6 border-b">
                    <div class="flex items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg> -->
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Test Efficiency
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Overview of the total number of bugs detected during development versus the total number of defects reported after shipment. 
                        </div>
                        <a href="https://laracasts.com">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Generate Graphs</div>
                                <div class="ml-1 text-indigo-500">
                                    <!-- <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-6 border-b border-l">
                    <div class="flex items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg> -->
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Testing Efficiency
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Calculates the ratio between the number of bugs resolved versus the number of bugs raised. 
                        </div>
                        <a href="https://laracasts.com">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Generate Graphs</div>
                                <div class="ml-1 text-indigo-500">
                                    <!-- <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg> -->
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Test Effectiveness
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Calculates the number of bugs fixed versus teh numer of existent bugs including those injected and escaped.
                        </div>
                        <a href="https://laracasts.com">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Generate Graphs</div>
                                <div class="ml-1 text-indigo-500">
                                    <!-- <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-6 border-t md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg> -->
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Sprint Velocity
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Tracks the number of story points accomplished per sprint to maintain an average team velocity for software production rates. 
                        </div>
                        <a href="https://laracasts.com">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Generate Graphs</div>
                                <div class="ml-1 text-indigo-500">
                                    <!-- <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </template>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>