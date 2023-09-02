<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    @if(session()->get('info'))
        Toast.fire({
            icon: 'info',
            title: '{!!session()->get('info')!!}'
        })
    @endif

    @if(session()->get('success'))
        Toast.fire({
            icon: 'success',
            title: '{!!session()->get('success')!!}'
        })
    @endif

    @if(session()->get('warning'))
        Toast.fire({
            icon: 'warning',
            title: '{!!session()->get('warning')!!}'
        })
    @endif

    @if(session()->get('error'))
        Toast.fire({
            icon: 'error',
            title: '{!!session()->get('error')!!}'
        })
    @endif
</script>