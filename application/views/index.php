<input type="text" ng-model="search" class="search-query" placeholder="Search">
<table class="table table-hover">
  <thead>
  <tr>
    <th class="span4">Project</th>
    <th class="span6">Description</th>
    <th class="span2"><a class="btn btn-success btn-small pull-right" href="<?php echo site_url('projects#/new'); ?>"><i class="icon-plus icon-white"></i> Add project</a></th>
  </tr>
  </thead>
  <tbody>
  <tr ng-repeat="project in projects | filter:search | orderBy:'name'">
    <td><a href="{{project.site}}" target="_blank">{{project.name}}</a></td>
    <td><i>{{project.description}}</i></td>
    <td>
      <div class="pull-right">
        <a class="btn btn-primary btn-mini" href="<?php echo site_url('projects#/edit/{{project.id}}'); ?>"><i class="icon-edit icon-white"></i> Edit</a>
        <button ng-click="destroy(project)" class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Delete</button> 
      </div>
    </td>
  </tr>
  </tbody>
</table>