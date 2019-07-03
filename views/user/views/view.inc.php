<mat-sidenav-container class="sidenav-container">
  <mat-sidenav #drawer class="sidenav" fixedInViewport="true"
      [attr.role]="(isHandset$ | async) ? 'dialog' : 'navigation'"
      [mode]="(isHandset$ | async) ? 'over' : 'side'"
      [opened]="!(isHandset$ | async)">
    <mat-toolbar><mat-icon>home</mat-icon>Home</mat-toolbar>
    <mat-nav-list>
      <a mat-list-item [routerLink]="['/profile']">Profile</a>
      <a mat-list-item [routerLink]="['/genaral']">Genaral</a>
      <a mat-list-item [routerLink]="['/about']">About</a>
      
    </mat-nav-list>
  </mat-sidenav>
  <mat-sidenav-content>
    <mat-toolbar color="primary">
      <button
        type="button"
        aria-label="Toggle sidenav"
        mat-icon-button
        (click)="drawer.toggle()"
        *ngIf="isHandset$ | async">
        <mat-icon aria-label="Side nav toggle icon">menu</mat-icon>
      </button>
      <span>Theme</span>
    </mat-toolbar>
    <!-- Add Content Here -->
    <router-outlet></router-outlet>
    
  </mat-sidenav-content>
</mat-sidenav-container>
