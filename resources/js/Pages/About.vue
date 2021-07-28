<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight mt-6 flex justify-center">
                About CaseBound&#8482;
            </h2>           
            <div class="border-b border-gray-200">
                <div class="bg-opacity-25 grid grid-cols-1 mb-8 mt-4">
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            CaseBound is developed and maintained by BannerOfNaynayy Inc. since 2021. 
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            The software is originally built for the ease and convenience of managing various projects.
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            Modern software engineering principles such as agile methodologies are implemented.
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            Effective development practices such as extreme programming are followed. 
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            The system possesses robustness and immense capability with built-in integrated modules.
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            Output generation is optimized for faster information processing and reliable data accuracy. 
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            All clients are solely acknowledged through the software and by the CaseBound Team. 
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-sm md:text-lg mt-4 text-gray-500">
                        <div>
                            Respective users are advised to go through the orientation process for training purposes.   
                        </div>
                    </div>
                </div>
                <div class = "bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 border-t border-b border-gray-300 md:border-r">
                        <div class="flex items-center">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg> -->
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                Source Code Complexity 
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Calcualates the average maintainability index of the various software components based on multiple factors such as lines of code, function poitns, Halsteadt's & Mccabe's metrics. 
                            </div>
                            <a href="https://laracasts.com">
                                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Generate Graphs</div>
                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 md:border-t border-b border-gray-300">
                        <div class="flex items-center">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg> -->
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                Work Productivity
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Calculates the number of function points completed per work hour for all employees on average for an organization. 
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
                    <div class="p-6 border-b border-gray-300 md:border-l">
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
                    <div class="p-6 border-b border-gray-300 md:border-l">
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
                    <div class="p-6 border-gray-300 md:border-l">
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
                    <div class="p-6 border-t border-gray-300 md:border-t-0 md:border-l">
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

 