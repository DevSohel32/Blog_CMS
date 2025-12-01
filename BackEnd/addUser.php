<?php include 'layout/head.php'?>


 <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">

        <div>
            <label class="block font-medium mb-1">Name</label>
            <input type="text" name="name" class="input input-bordered w-full" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Email</label>
            <input type="email" name="email" class="input input-bordered w-full" required>
        </div>

        <div>
            <label class="block font-medium mb-1">Role</label>
            <select name="role" class="select select-bordered w-full">
                <option value="user">User</option>
                <option value="author">Author</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <div>
            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="select select-bordered w-full">
                <option value="Active">Active</option>
                <option value="Suspended">Suspended</option>
            </select>
        </div>

        <div>
            <label class="block font-medium mb-1">Photo</label>
            <input type="file" name="photo" class="file-input file-input-bordered w-full">
        </div>

        <button type="submit" class="btn btn-primary w-full">Add User</button>
    </form>
</div>