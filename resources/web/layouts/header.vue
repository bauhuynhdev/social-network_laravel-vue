<template>
    <el-header class="h-auto border-bottom">
        <div class="container">
            <el-row class="d-flex align-items-center py-1">
                <el-col :span="4">
                    <el-input placeholder="Search">
                        <i slot="prefix" class="el-input__icon el-icon-search"></i>
                    </el-input>
                </el-col>
                <el-col :span="4" class="ml-auto">
                    <el-button type="primary" class="float-right" icon="el-icon-user-solid">Login</el-button>
                </el-col>
            </el-row>
        </div>
    </el-header>
</template>

<script>
    export default {
        name: "headerComponent"
    }
</script>

<style scoped>

</style>
