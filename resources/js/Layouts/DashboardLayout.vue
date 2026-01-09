<script setup>
import SideBar from '@/Components/Main/SideBar.vue';
import Header from '@/Components/Main/Header.vue';
import Footer from '@/Components/Main/Footer.vue';
import { usePage } from '@inertiajs/vue3';
import { watch } from 'vue';
import Swal from 'sweetalert2';

const page = usePage();

watch(() => page.props.flash, (flash) => {
    if (flash?.success) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            icon: 'success',
            title: flash.success,
            background: '#1f2937', // Dark mode background
            color: '#fff'
        });
    }
    if (flash?.error) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            icon: 'error',
            title: flash.error,
             background: '#1f2937', // Dark mode background
            color: '#fff'
        });
    }

    if (flash?.sweet_alert) {
        let alerts = flash.sweet_alert;
        try {
            if (typeof alerts === 'string') {
                alerts = JSON.parse(alerts);
            }
        } catch (e) {
            console.error('Error parsing sweet_alert data', e);
        }

        if (Array.isArray(alerts)) {
            alerts.forEach(alert => {
                 Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: alert.timer || 3000,
                    timerProgressBar: true,
                    icon: alert.type || 'info',
                    title: alert.title,
                    text: alert.text,
                    background: '#1f2937',
                    color: '#fff'
                 });
            });
        } else if (typeof alerts === 'object' && alerts !== null) {
             Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: alerts.timer || 3000,
                timerProgressBar: true,
                icon: alerts.type || 'info',
                title: alerts.title,
                text: alerts.text,
                background: '#1f2937',
                color: '#fff'
            });
        }
    }
}, { deep: true });
</script>

<template>
    <div class="flex h-screen bg-gray-900 font-roboto text-gray-100">
        <!-- Sidebar -->
        <SideBar />

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <Header />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-800 p-6">
                <!-- Content injected here -->
                <slot />
            </main>

            <Footer />
        </div>
    </div>
</template>
