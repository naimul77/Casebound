<template>
    <!-- Header Section Commence -->
    <app-layout>
        <template #header>
            <div class = "grid grid-cols-4">
                <div class = "text-xl text-gray-400">
                    Key Performance Indicators
                </div>
                <div class = "text-xl text-gray-400">
                    Productivity Ratio 3.02
                </div>
                <div class = "text-xl text-gray-400">
                    Test Coverage Ratio 0.88
                </div>
                <div class = "text-xl text-gray-400">
                    Maintainability Index 4.77
                </div>
            </div>
        </template>
        <div class = "py-6">
            <div class = "grid grid-cols-1 md:grid-cols-2">
                <!-- Area Graph Starts -->
                <div class = "max-w-7xl m-10 md:mr-5 sm:px-2 lg:px-3">
                    <div class = "bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class = "p-6">
                            <apexchart :width="area.width" :height="area.height" :type="area.type" :options="area.options" :series="area.series"></apexchart>
                        </div>
                    </div>
                </div>
                <!-- Line Graph Starts -->
                <div class = "max-w-7xl m-10 md:ml-5 sm:px-2 lg:px-3">
                    <div class = "bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class = "p-6">
                            <apexchart :width="line.width" :height="line.height" :type="line.type" :options="line.options" :series="line.series"></apexchart>
                        </div>
                    </div>
                </div>
                <!-- Donut Chart Starts -->
                <div class = "max-w-7xl m-10 md:mr-5 sm:px-2 lg:px-3">
                    <div class = "bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class = "p-6">
                            <apexchart :width="donut.width" :height="donut.height" :type="donut.type" :options="donut.options" :series="donut.series"></apexchart>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart Starts -->
                <div class = "max-w-7xl m-10 md:ml-5 sm:px-2 lg:px-3">
                    <div class = "bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class = "p-6">
                            <apexchart :width="pie.width" :height="pie.height" :type="pie.type" :options="pie.options" :series="pie.series"></apexchart>
                        </div>
                    </div>
                </div>
                <!-- Bar Chart Starts -->
                <div class = "max-w-7xl m-10 md:mr-5 sm:px-2 lg:px-3">
                    <div class = "bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class = "p-6">
                            <apexchart :width="bar.width" :height="bar.height" :type="bar.type" :options="bar.options" :series="bar.series"></apexchart>
                        </div>
                    </div>
                </div>
                <!-- Horizontal Bar Chart Starts -->
                <div class = "max-w-7xl m-10 md:ml-5 sm:px-2 lg:px-3">
                    <div class = "bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class = "p-6">
                            <apexchart :width="hbar.width" :height="hbar.height" :type="hbar.type" :options="hbar.options" :series="hbar.series"></apexchart>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout, 
        }, 
        props: {
            area: Object, 
            pie: Object, 
            donut: Object, 
            radial: Object, 
            polarea: Object, 
            line: Object, 
            bar: Object, 
            hbar: Object
        }
    }
</script>
